<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Entities\SocialAccount;
use Laravel\Socialite\Contracts\Provider;
use App\Entities\User;
use App\Entities\UserProfile;

class SocialAccountService
{
    public function createOrGetUser(Provider $provider)
    {
        $providerUser = $provider->user();
        $providerName = class_basename($provider);

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $this->getName($providerUser),
                    'lastname' => $this->getLastname($providerUser),
                    'password' => bcrypt(str_random()),
                ]);

                $user->userProfile()->save(UserProfile::create());
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }

    public function getName(ProviderUser $providerUser)
    {
        $fullName = $providerUser->getName();
        $arr = explode(' ', trim($fullName));
        return $arr[0];
    }

    public function getLastname(ProviderUser $providerUser)
    {
        $fullName = $providerUser->getName();
        $pieces = explode(' ', $fullName);
        return array_pop($pieces);
    }
}
