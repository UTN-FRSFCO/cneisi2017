@if(!Auth::guest() && ($conference->getSpeaker()['name'] != ""))

    <form id="assistanceForm" method="POST" role="form" action="/confirm-assistance">
        {{ csrf_field() }}
        <input type="hidden" name="conference_id" value="{{ $conference->getId() }}">
        @if(($conferenceIdAssistances != []) && (in_array($conference->getId(), $conferenceIdAssistances)))
        <button id="assistanceBtn-{{ $conference->getId() }}" type="submit" class="btn btn-rounded btn-outline-clr btn-sm assistanceBtn">No asistiré<span class="fa fa-thumbs-o-down"></span></button>
            @else
            <button id="assistanceBtn-{{ $conference->getId() }}" type="submit" class="btn btn-rounded btn-outline-clr btn-sm assistanceBtn">Asistiré<span class="fa fa-thumbs-o-up"></span></button>
        @endif

    </form>

@endif