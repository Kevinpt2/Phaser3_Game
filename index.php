<!doctype html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" />
    <title>Making your first Phaser 3 Game - Part 1</title>
    <script src="//cdn.jsdelivr.net/npm/phaser@3.11.0/dist/phaser.js"></script>
    <style type="text/css">
        body {
            margin: 0;
        }
    </style>
</head>
<body>

<script type="text/javascript">

    var config = {
        type: Phaser.AUTO,
        width: 800,
        height: 600,
        scene: {
            preload: preload,
            create: create,
            update: update
        }
    };

    var game = new Phaser.Game(config);

    function preload ()
    {
        this.load.image('sky', 'assets/sky.png');
        this.load.image('ground', 'assets/platform.png');
        this.load.image('star', 'assets/star.png');
        this.load.image('bomb', 'assets/bomb.png');
        this.load.spritesheet('dude', 
            'assets/dude.png',
            { frameWidth: 32, frameHeight: 48 }
        );
    }

    function create ()
    {
        this.add.image(400,300, 'sky');

        platforms = this.physics.add.staticGroup();
        platforms.create(400,568, 'ground'),setScale(2).refreshBody();

        platforms.create(500,300, 'ground');
        platforms.create(100,200, 'ground');
        platforms.create(600,100, 'ground');
        
    }

    function update ()
    {

    }

</script>

</body>
</html>