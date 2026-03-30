<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="/src/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            font-family:'Poppins',sans-serif;
        }
    </style>

</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-semibold text-gray-700">
            AdminPanel
        </h1>

        <div class="flex items-center gap-4">
            <i class='bx bx-search absolute left-3 top-2.5 text-2xl text-gray-400'></i>
            <input type="text" placeholder="Search..." 
            class="border rounded-lg px-3 py-1">

            <div class="p-2.5 bg-gray-300 rounded-full flex items-center justify-center p-2.5">
                <i class='bx bx-user text-2xl'></i>
            </div>
        </div>
    </header>
    <div class="flex">
        <aside class="w-64 bg-gray-900 text-gray-200 min-h-screen p-5">
            <h2 class="text-xl font-bold mb-8">AdminPanel</h2>
            <nav class="space-y-2">
                <a class="block p-3 rounded-lg bg-gray-800">Dashboard</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Users</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Products</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Orders</a>
                <a class="block p-3 rounded-lg hover:bg-gray-800">Reports</a>
            </nav>
        </aside>
</body>
</html>
