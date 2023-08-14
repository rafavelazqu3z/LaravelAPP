<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}} navbar-brand">
                <img
                    src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/319d7060-fd05-4b03-8b84-d56ff36ab569/dcnthgb-de31a9ac-622e-4b85-b473-ac3f8edd3e0d.png/v1/fill/w_1024,h_1024/blood_moon_logo_by_narx221_dcnthgb-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzMxOWQ3MDYwLWZkMDUtNGIwMy04Yjg0LWQ1NmZmMzZhYjU2OVwvZGNudGhnYi1kZTMxYTlhYy02MjJlLTRiODUtYjQ3My1hYzNmOGVkZDNlMGQucG5nIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.LWNOyUeJa-K6KbLs-DOwwko-akWmJpxBR7K_Fjqd2dc"
                    alt="" width="30" height="30">
            </a>

            <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>

            <a href="{{route('contactanos.index')}}"
               class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos </a>

            <a href="#">Login</a>

        </div>
    </nav>
</header>
