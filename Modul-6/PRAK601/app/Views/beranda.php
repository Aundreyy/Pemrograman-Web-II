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
            background-color: #aed9e0;
            border: 2.5px solid #000;
            padding: 20px;
            flex: 1;
            min-width: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .right-panel {
            flex: 2;
            min-width: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .info-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
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
            Beranda
        </div>
        <div class="content">
            <div class="left-panel">
                <div style="font-size: 50px;">💻</div>
                <h3 style="margin-top: 15px; text-align: center;">Web II</h3>
            </div>
            <div class="right-panel">
                <h2 style="margin-bottom: 25px;">Halaman Beranda</h2>
                
                <div class="info-row">
                    <div style="font-size: 24px;">👤</div>
                    <div>
                        <div style="font-weight: bold; font-size: 14px;">Nama Praktikan</div>
                        <div style="font-size: 14px; margin-top: 4px;"><?= $praktikan['nama'] ?></div>
                    </div>
                </div>
                
                <div class="info-row">
                    <div style="font-size: 24px;">🆔</div>
                    <div>
                        <div style="font-weight: bold; font-size: 14px;">NIM Praktikan</div>
                        <div style="font-size: 14px; margin-top: 4px;"><?= $praktikan['nim'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dock">
        <a href="/" class="dock-link">🏠 Beranda</a>
        <a href="/profil" class="dock-link">📁 Profil</a>
    </div>
</body>
</html>