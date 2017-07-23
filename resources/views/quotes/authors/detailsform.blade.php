<paper-card>
<form method="POST" action="/quotes/{{ $quoteauthor->slug }}/details">
    <div class="card-content">
        {{ csrf_field() }}
        @if ($authordetail)
            @if ($authordetail->full_name)
                <input type="hidden" name="full_name" value="{{ $authordetail->full_name }}">
            @else
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="full_name" name="full_name" value="{{ old('full_name', $authordetail->full_name) }}">
                    <label class="mdl-textfield__label" for="full_name">Full Name</label>
                    <span class="mdl-textfield__error">Letters Only</span>
                </div>
            @endif
            @if ($authordetail->known_for)
                <input type="hidden" name="known_for" value="{{ $authordetail->known_for }}">
            @else
                <div class="mdl-textfield mdl-js-textfield">
                  <textarea class="mdl-textfield__input" type="text" rows= "5" name="known_for" id="known_for" value="{{ old('known_for', $authordetail->known_for) }}"></textarea>
                  <label class="mdl-textfield__label" for="known_for">Known For</label>
                </div>
            @endif
                <div class="mdl-textfield mdl-js-textfield">
                  <textarea class="mdl-textfield__input" type="text" rows= "5" name="intro" id="intro" value="{{ old('intro', $authordetail->intro) }}"></textarea>
                  <label class="mdl-textfield__label" for="intro">{{ $quoteauthor->display_name }} Intro</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <textarea class="mdl-textfield__input" type="text" rows= "5" name="bio" id="bio" value="{{ old('bio', $authordetail->bio) }}"></textarea>
                  <label class="mdl-textfield__label" for="bio">{{ $quoteauthor->display_name }} Bio</label>
                </div>
            @if ($authordetail->wikipedia)
                <input type="hidden" name="wikipedia" value="{{ $authordetail->wikipedia }}">
            @else
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9_.]*" id="wikipedia" name="wikipedia" value="{{ old('wikipedia', $authordetail->wikipedia) }}">
                    <label class="mdl-textfield__label" for="wikipedia">Wikipedia</label>
                    <span class="mdl-textfield__error">Slug only, not full URL</span>
                </div>
            @endif
            @if ($authordetail->death)
            @else
                @if ($authordetail->facebook)
                    <input type="hidden" name="facebook" value="{{ $authordetail->facebook }}">
                @else
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9.]*" id="facebook" name="facebook" value="{{ old('facebook', $authordetail->facebook) }}">
                        <label class="mdl-textfield__label" for="facebook">Facebook</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                @endif
                @if ($authordetail->twitter)
                    <input type="hidden" name="twitter" value="{{ $authordetail->twitter }}">
                @else
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9_]*" id="twitter" name="twitter" value="{{ old('twitter', $authordetail->twitter) }}">
                        <label class="mdl-textfield__label" for="twitter">Twitter</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                @endif
                @if ($authordetail->linkedin)
                    <input type="hidden" name="linkedin" value="{{ $authordetail->linkedin }}">
                @else
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9._-]*" id="linkedin" name="linkedin" value="{{ old('linkedin', $authordetail->linkedin) }}">
                        <label class="mdl-textfield__label" for="facebook">LinkedIn</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                @endif
                @if ($authordetail->instagram)
                    <input type="hidden" name="instagram" value="{{ $authordetail->instagram }}">
                @else
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9._]*" id="instagram" name="instagram" value="{{ old('instagram', $authordetail->instagram) }}">
                        <label class="mdl-textfield__label" for="instagram">Instagram</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                @endif
            @endif
            @if ($authordetail->birth)
                <input type="hidden" name="birth" value="{{ $authordetail->birth }}">
            @else
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="date" id="birth" name="birth" value="{{ old('birth', $authordetail->birth) }}">
                    <label class="mdl-textfield__label" for="birth">Birth</label>
                </div>
            @endif
            @if ($authordetail->death)
                <input type="hidden" name="death" value="{{ $authordetail->death }}">
            @else
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="date" id="death" name="death" value="{{ old('death', $authordetail->death) }}">
                    <label class="mdl-textfield__label" for="death">Death</label>
                </div>
            @endif
                <div class="mdl-textfield mdl-js-textfield">
                  <textarea class="mdl-textfield__input" type="text" rows= "5" name="quotes_summary" id="quotes_summary" value="{{ old('quotes_summary', $authordetail->quotes_summary) }}"></textarea>
                  <label class="mdl-textfield__label" for="quotes_summary">Quotes Summary</label>
                </div>
        @else
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="full_name" name="full_name" value="{{ old('full_name') }}">
                <label class="mdl-textfield__label" for="full_name">Full Name</label>
                <span class="mdl-textfield__error">Letters Only</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="date" id="birth" name="birth" value="{{ old('birth') }}">
                <label class="mdl-textfield__label" for="birth">Birth</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="date" id="death" name="death" value="{{ old('death') }}">
                <label class="mdl-textfield__label" for="death">Death</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
              <textarea class="mdl-textfield__input" type="text" rows= "5" name="known_for" id="known_for" value="{{ old('known_for') }}"></textarea>
              <label class="mdl-textfield__label" for="known_for">Known For</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
              <textarea class="mdl-textfield__input" type="text" rows= "5" name="intro" id="intro" value="{{ old('intro') }}"></textarea>
              <label class="mdl-textfield__label" for="intro">{{ $quoteauthor->display_name }} Intro</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
              <textarea class="mdl-textfield__input" type="text" rows= "5" name="bio" id="bio" value="{{ old('bio') }}"></textarea>
              <label class="mdl-textfield__label" for="bio">{{ $quoteauthor->display_name }} Bio</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9_.]*" id="wikipedia" name="wikipedia" value="{{ old('wikipedia') }}">
                <label class="mdl-textfield__label" for="wikipedia">Wikipedia</label>
                <span class="mdl-textfield__error">Slug only, not full URL</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9.]*" id="facebook" name="facebook" value="{{ old('facebook') }}">
                <label class="mdl-textfield__label" for="facebook">Facebook</label>
                <span class="mdl-textfield__error">Username only, no symbols</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9_]*" id="twitter" name="twitter" value="{{ old('twitter') }}">
                <label class="mdl-textfield__label" for="twitter">Twitter</label>
                <span class="mdl-textfield__error">Username only, no symbols</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9._-]*" id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
                <label class="mdl-textfield__label" for="facebook">LinkedIn</label>
                <span class="mdl-textfield__error">Username only, no symbols</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9._]*" id="instagram" name="instagram" value="{{ old('instagram') }}">
                <label class="mdl-textfield__label" for="instagram">Instagram</label>
                <span class="mdl-textfield__error">Username only, no symbols</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
              <textarea class="mdl-textfield__input" type="text" rows= "5" name="quotes_summary" id="quotes_summary" value="{{ old('quotes_summary') }}"></textarea>
              <label class="mdl-textfield__label" for="quotes_summary">Quotes Summary</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield">
              <textarea class="mdl-textfield__input" type="text" rows= "5" name="books_summary" id="books_summary" value="{{ old('books_summary') }}"></textarea>
              <label class="mdl-textfield__label" for="books_summary">Books Summary</label>
            </div>
        @endif
    </div>
    <div class="card-actions">
        <button type="submit" class="mdl-button mdl-js-button mdl-button--accent">Submit</button>
    </div>
</form>
</paper-card>