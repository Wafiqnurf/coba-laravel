<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diatensi Care</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- Animation AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav id="navbar" class="navbar">
        <div class="logo">
            <img src="{{ asset('assets/images/healthcare.png') }}" alt="Diatensi Care Logo">
            <a href="/dashboard">Diatensi Care</a>
        </div>
        <div class="avatar">
            <p id="username" style="cursor: pointer;"><span>{{ Auth::user()->name }}</span></p>
            <img src="{{ asset('assets/images/user.png') }}" alt="">
            <div id="logout-button" style="display: none;">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    // SweetAlert untuk berbagai jenis pesan
    @if(session('success_add'))
    Swal.fire({
        icon: 'success',
        title: 'Data Berhasil Ditambahkan!',
        text: '{{ session('
        success_add ') }}',
    });
    @endif

    @if(session('success_delete'))
    Swal.fire({
        icon: 'success',
        title: 'Data Berhasil Dihapus!',
        text: '{{ session('
        success_delete ') }}',
    });
    @endif

    // Konfirmasi sebelum menghapus data
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const form = this.closest('form');

            Swal.fire({
                title: "Apakah Yakin Ingin Menghapus?",
                text: "Data tidak dapat dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus !",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    // Button Logout
    const username = document.getElementById('username');
    const logoutButton = document.getElementById('logout-button');

    username.addEventListener('click', function(event) {
        event.stopPropagation();
        if (logoutButton.style.display === 'none' || logoutButton.style.display === '') {
            logoutButton.style.display = 'block';
        } else {
            logoutButton.style.display = 'none';
        }
    });

    document.addEventListener('click', function() {
        logoutButton.style.display = 'none';
    });
    </script>

    <!-- Aimation AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>
