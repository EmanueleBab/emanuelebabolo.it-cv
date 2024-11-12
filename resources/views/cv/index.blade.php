<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('cv.title') }}</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite(['resources/scss/cv.scss'])
</head>

<body>
    <div class="language-switcher">
        <a href="{{ route('cv', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
        <a href="{{ route('cv', 'it') }}" class="{{ app()->getLocale() == 'it' ? 'active' : '' }}">IT</a>
    </div>

    <div class="container">
        <header>
            <div class="header-content">
                <h1 class="name">{{ __('cv.name') }}</h1>
                <div class="title">{{ __('cv.role') }}</div>
            </div>
        </header>

        <div class="contact-info">
            <div class="contact-item">
                <box-icon name='envelope' type='solid'></box-icon>
                <a href="mailto:{{ __('cv.contact.email') }}">{{ __('cv.contact.email') }}</a>
            </div>
            <div class="contact-item">
                <box-icon name='github' type='logo'></box-icon>
                <a href="{{ 'https://' . __('cv.contact.github') }}"> {{ __('cv.contact.github') }}</a>
            </div>
            <div class="contact-item">
                <box-icon type='logo' name='linkedin'></box-icon> {{ __('cv.contact.linkedin') }}
                <a href="{{ __('cv.contact.linkedinurl') }}"></a>
            </div>
        </div>

        <div class="main-content">
            <section>
                <h2 class="section-title">{{ __('cv.sections.summary') }}</h2>
                <p class="summary-paragraph">{!! __('cv.summary_text') !!}</p>
            </section>

            <section>
                <h2 class="section-title">{{ __('cv.sections.skills') }}</h2>
                <div class="skills-grid">
                    @foreach (__('cv.skills_list') as $skill)
                        <div class="skill-item">{{ $skill }}</div>
                    @endforeach
                </div>
            </section>

            <section>
                <h2 class="section-title">{{ __('cv.sections.experience') }}</h2>
                @foreach (__('cv.experience_items') as $experience)
                    <div class="experience-item">
                        <div class="experience-header">
                            <span class="company">{{ $experience['company'] }}</span>
                            <span class="date">{{ $experience['period'] }}</span>
                        </div>
                        <div class="position">{{ $experience['position'] }}</div>
                        <ul>
                            @foreach ($experience['achievements'] as $achievement)
                                <li>{{ $achievement }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </section>
            <section>
                <h2 class="section-title">{{ __('cv.sections.volunteering') }}</h2>
                @foreach (__('cv.volunteering_items') as $experience)
                    <div class="experience-item">
                        <div class="experience-header">
                            <span class="company">{{ $experience['company'] }}</span>
                            <span class="date">{{ $experience['period'] }}</span>
                        </div>
                        <div class="position">{{ $experience['position'] }}</div>
                        <ul>
                            @foreach ($experience['achievements'] as $achievement)
                                <li>{{ $achievement }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </section>
            <section>
                <h2 class="section-title">{{ __('cv.sections.education') }}</h2>
                @foreach (__('cv.education_items') as $education)
                    <div class="education-item">
                        <div class="experience-header">
                            <span class="company">{{ $education['institution'] }}</span>
                            <span class="date">{{ $education['period'] }}</span>
                            <span class="position">{{ $education['degree'] }}</span>
                        </div>
                    </div>
                @endforeach
                @foreach (__('cv.certifications') as $certification)
                    <div class="education-item">
                        <a href="{{ $certification['link'] }}">
                            <box-icon name='link'></box-icon> {{ $certification['title'] }}
                        </a>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
    <div class="footer-for-pdf">
       {!!__('cv.footer')!!}
    </div>
    <footer>
        Made by me with ❤️
        <br>
        Using Laravel and Vite, hosted on my own server
        <br>
        icons by <a href="https://boxicons.com/">Boxicons</a>
        <br>
        git repo available on my github profile
    </footer>
</body>

</html>
