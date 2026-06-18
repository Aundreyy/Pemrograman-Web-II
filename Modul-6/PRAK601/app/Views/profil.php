<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: linear-gradient(180deg, #cde6e2 0%, #d8e5cd 100%);
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #1a1a1a;
            padding: 20px;
        }
        .window {
            background-color: #f7ede2;
            border: 2.5px solid #000;
            border-radius: 8px;
            box-shadow: 6px 6px 0 #000;
            width: 100%;
            max-width: 600px;
            overflow: hidden;
            margin-bottom: 40px;
        }
        .title-bar {
            border-bottom: 2.5px solid #000;
            padding: 10px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            font-weight: bold;
            font-size: 14px;
        }
        .controls {
            position: absolute;
            left: 16px;
            display: flex;
            gap: 6px;
        }
        .control-dot {
            width: 12px;
            height: 12px;
            border: 2px solid #000;
            border-radius: 50%;
        }
        .content {
            padding: 30px;
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }
        .left-panel {
            flex: 1;
            min-width: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .right-panel {
            flex: 2.5;
            min-width: 250px;
        }
        .profile-pic {
            border: 2.5px solid #000;
            border-radius: 8px;
            width: 100px;
            height: 100px;
            background-color: #fff;
            box-shadow: 3px 3px 0 #000;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-top: 15px;
        }
        .data-table td {
            padding: 12px 0;
            border-bottom: 2px dotted #000;
        }
        .data-table tr:last-child td {
            border-bottom: none;
        }
        .data-label {
            font-weight: bold;
            width: 35%;
        }
        .dock {
            background-color: #f7ede2;
            border: 2.5px solid #000;
            border-radius: 12px;
            box-shadow: 4px 4px 0 #000;
            padding: 12px 20px;
            display: flex;
            gap: 20px;
        }
        .dock-link {
            border: 2px solid #000;
            background: #fff;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            color: #000;
            font-weight: bold;
            box-shadow: 2px 2px 0 #000;
        }
        .dock-link:active {
            transform: translate(2px, 2px);
            box-shadow: 0 0 0 #000;
        }
    </style>
</head>
<body>
    <div class="window">
        <div class="title-bar">
            <div class="controls">
                <div class="control-dot"></div>
                <div class="control-dot"></div>
                <div class="control-dot"></div>
            </div>
            Data Profil
        </div>
        <div class="content">
            <div class="left-panel">
                <img src="https://ui-avatars.com/api/?name=<?= urlencode($praktikan['nama']) ?>&background=fff&color=000&size=100&bold=true" class="profile-pic" alt="Avatar">
            </div>
            <div class="right-panel">
                <h2 style="margin-bottom: 5px; font-size: 22px;"><?= $praktikan['nama'] ?></h2>
                <p style="font-weight: bold; margin-bottom: 10px; font-size: 14px;"><?= $praktikan['nim'] ?></p>
                
                <table class="data-table">
                    <tr>
                        <td class="data-label">Program Studi</td>
                        <td><?= $praktikan['prodi'] ?></td>
                    </tr>
                    <tr>
                        <td class="data-label">Hobi</td>
                        <td><?= $praktikan['hobi'] ?></td>
                    </tr>
                    <tr>
                        <td class="data-label">Keahlian</td>
                        <td><?= $praktikan['skill'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="dock">
        <a href="/" class="dock-link">🏠 Home</a>
        <a href="/profil" class="dock-link">📁 Profil</a>
    </div>
</body>
</html>