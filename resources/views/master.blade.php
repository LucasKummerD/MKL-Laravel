<!DOCTYPE html>
<html>

    @include('layouts.partials.header')
<body>

    @include('layouts.partials.navbarMaster')

        <div>
            <div class="content">
                <div class="title m-b-md">
                    <img src="{{ asset('assets/MKL-01.png') }}">
                </div>
            </div>
        </div>

        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
</body>
</html>