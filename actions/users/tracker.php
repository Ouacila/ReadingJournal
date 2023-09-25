<style>
        header{
            width: 100%;
            height: 250px;
            background-image: url('../../assets/Tracker.png');
            background-size:100% 100%;
            top:0%;
            margin:0;
            z-index: 1;
        }
        body{
            background-color: #E2D7C1;
            width:100%;
            margin:0;
            z-index: 0;
        }
</style>
<header>
</header>
<body>
    <ul>
    <?php
            for($x = 1; $x <= 90; $x++){    
            ?>
                <li>
                    <input type="checkbox" class="check" id="check_<?= $x ?>" value="check_<?= $x ?>">
                    <label for="check_<?= $x ?>"><?= $x ?></label>
                </li>
            <?php
            }
        ?>
    
    </ul>
    <a href="#" class="next">Page suivante ➡️➡️➡️</a> 
</body>

<style>
    ul {
    padding: 0;
    margin: 0;
    clear: both;
    }

    li{
    list-style-type: none;
    list-style-position: outside;
    padding: 20px;
    float: left;
    }

    input[type="checkbox"]:not(:checked), 
    input[type="checkbox"]:checked {
        position: absolute;
        left: -9999%;
        }

    input[type="checkbox"] + label {
    display: inline-block;
    width: 70px;
    height: 70px;
    cursor: pointer;
    border: 1px solid #7c6d51;
    color: #black;
    background-color: white;
    margin-bottom: 10px;
    }

    input[type="checkbox"]:checked + label {
    border: 1px solid white;
    color: white;
    background-color: black;
    }
    label{
        vertical-align: middle;
        text-align: center;
        line-height: 70px;
        font-size:2rem;
        font-weight: bold;
        
    }
    .next{
        float: right;
        margin-right:100px;
        font-size: 1.5rem;
        color: #7c6d51;
    }
</style>