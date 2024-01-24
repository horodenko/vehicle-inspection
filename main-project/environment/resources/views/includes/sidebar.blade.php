<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
</head>

<body>
    <aside class="sidebar-container">
        <ul>
            <li>
                <a href="/home" />
                <i class="fa-solid fa-house sidebar-icon"></i>
                <span class="sidebar-span">Home</span>
                </a>
            </li>
            <li>
                <a href="/drivers" />
                <i class="fa-regular fa-id-card sidebar-icon"></i>
                <span class="sidebar-span">Cadastro de Motoristas</span>
                </a>
            </li>
            <li>
                <a href="/inspection" />
                <i class="fa-solid fa-pen sidebar-icon"></i>
                <span class="sidebar-span">Lançamento de Revisões</span>
                </a>
            </li>
        </ul>
    </aside>
    <aside class=sidebar-placeholder></aside>

    <script>
        const [sidebar, placeholder] = [
            document.querySelector('.sidebar-container'),
            document.querySelector('.sidebar-placeholder')
        ];
        const toggleButton = document.querySelector('.toggle-button');

        sidebar.classList.add('active');
        placeholder.classList.add('active');
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            placeholder.classList.toggle('active');
        })
    </script>
</body>

</html>