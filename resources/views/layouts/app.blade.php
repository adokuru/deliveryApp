<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css">

    <style>
        .dataTables_length select {
            width: 60px !important;
        }

    </style>
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
        <!-- Desktop sidebar -->
        @include('navigation-menu')
        <div class="flex flex-col flex-1 w-full">

            @include('layouts.admin.header')
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <x-jet-banner />
                    <!-- Page Heading -->
                    @if (isset($header))
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            {{ $header }}
                        </h2>
                    @endif
                    {{ $slot }}
            </main>
        </div>
    </div>
    @stack('modals')

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
        (function($) {

            // alerts
            $.fn.alert = function(type, message) {
                this.html('');
                this.hide();
                this.attr('class', '');

                if (type !== null && message !== null) {
                    var alertType = '';

                    switch (type) {
                        case 'e':
                            alertType = 'danger';
                            break;
                        case 'i':
                            alertType = 'info';
                            break;
                        case 'w':
                            alertType = 'warning';
                            break;
                        case 's':
                            alertType = 'success';
                            break;
                    }

                    this.addClass('alert alert-' + alertType);
                    this.html(message);
                    this.show();
                }
            };

            // confirm
            window.confirmAction = function(icon, title, message, yesCallback, noCallback = undefined) {
                swal.fire({
                    title: title,
                    text: message,
                    icon: icon,
                    showCancelButton: true,
                    reverseButtons: true,
                    confirmButtonText: 'Yes',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        yesCallback();
                        return;
                    }

                    if (noCallback !== undefined && noCallback !== 'undefined' && noCallback !== null)
                        noCallback();
                });
            };

            window.sAlert = function(icon, title, message, callback = undefined) {
                swal.fire({
                    title: title,
                    text: message,
                    icon: icon
                }).then(function() {
                    callback();
                });
            }


        }(jQuery));
    </script>
</body>

</html>
