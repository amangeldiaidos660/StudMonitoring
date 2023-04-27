<div class="nav">
                <div class="menu-toggle"></div>
                <ul>
                    <li class="list">
                        <a href="app/admin/adminaccount.php">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="text">Профиль</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo BASE_URL .'teachers.php' ?>">
                            <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                            <span class="text">Оқытушылар</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo BASE_URL .'students.php' ?>">
                            <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="text">Студенттер</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo BASE_URL .'records.php' ?>">
                            <span class="icon"><ion-icon name="receipt-outline"></ion-icon></span>
                            <span class="text">Белгілеу журналы</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo BASE_URL . 'logout.php'?>">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="text">Шығу</span>
                        </a>
                    </li>
                </ul>
            </div>
            <script>
        const menuToggle = document.querySelector(".menu-toggle");
        const nav = document.querySelector(".nav");
        menuToggle.onclick = function(){
            nav.classList.toggle('open');
        }

        const list = document.querySelectorAll(".list");
        function activeLink(){
            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item)=>
        item.addEventListener('click', activeLink))
        
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>