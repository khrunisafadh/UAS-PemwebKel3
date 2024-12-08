<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <link rel="stylesheet" href="{{ asset('/css/style adminindex.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="scriptsearch.js" defer></script>
</head>
<body>
    <div class="sidebar">
        <h2>ADMINISTRATOR</h2>
        <div class="user-info">
            <img src="https://storage.googleapis.com/a1aa/image/0UrnHIec5uXMLSqyHUQEsUiPSk0Q3TC20YHtlq4Fl6cLMD8JA.jpg" alt="User profile picture" height="40" width="40">
            <div>
                <div>Digital Jessie</div>
                <div class="status">Online</div>
            </div>
        </div>
        <ul class="menu">
            <li><a class="active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="/adminpanel"><i class="fas fa-newspaper"></i> Tambah Berita</a></li>
            <li>
                <form action="/logout">
                    @csrf
                    <button type="submit" href="/l"><i class=""></i> Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="content">
            <div class="header">
                <h1>Dashboard Admin</h1>
            </div>
            <div class="table-container">
                <h2>Semua Berita</h2>
                <div class="table-controls">
                    <label>
                        Show
                        <select>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        entries
                    </label>
                    <input type="text" placeholder="Search">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pertandingan Seru: Timnas Menang Dramatis</td>
                            <td>20 Nov 2024</td>
                            <td>Published</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bandung Creative Festival Kembali Digelar</td>
                            <td>18 Nov 2024</td>
                            <td>Published</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tips Sukses Menyelesaikan Marathon</td>
                            <td>15 Nov 2024</td>
                            <td>Draft</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Bandung Creative Festival Kembali Digelar</td>
                            <td>18 Nov 2024</td>
                            <td>Published</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Bandung Creative Festival Kembali Digelar</td>
                            <td>18 Nov 2024</td>
                            <td>Published</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Bandung Creative Festival Kembali Digelar</td>
                            <td>18 Nov 2024</td>
                            <td>Published</td>
                            <td>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <div class="info">Showing 1 to 3 of 10 entries</div>
                    <ul class="pages">
                        <li><a href="#">Previous</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <div class="footer">
        © 2014-2020 Portal Berita Pro | Portal Media Online International. All rights reserved.
    </div>
</body>
</html>
