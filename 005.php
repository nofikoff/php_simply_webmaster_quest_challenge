<div>
    <h1>Task 5/7</h1>
    <div class="question-wrapper">

        <div id="task-5">
            <button class="primary" id="task-5-button">Click</button>
            need <b id="task-5-count">10000</b> more
        </div>
        <script>
            (function () {
                var CODE = 's';
                var PASS = ' ';
                var x = [
                    CODE, 'k', 'c', 'i', 'l', 'c',
                    PASS, 'y', 'n', 'a', 'm',
                    PASS, 'o',
                    CODE
                ];
                var count = 10000;
                var countEl = document.getElementById('task-5-count');

                countEl.innerText = String(count);

                document.getElementById('task-5-button').addEventListener(
                    'click',
                    function () {
                        if (count === 0) {
                            document.getElementById('task-5').innerText = x.reverse().join('')
                        } else {
                            count--;
                            countEl.innerText = String(count);
                        }
                    }
                )
            })()
        </script>


    </div>
</div>