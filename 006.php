<div>
    <h1>Task 6/7</h1>
    <div class="question-wrapper">

        <div>
            <p>const answer = window.getAnswer(🍪);</p>
        </div>
        <script>
            document.cookie = 'answer=Y29vb29raWVz';
            window.getAnswer = function (cookie) {
                if (!cookie) {
                    console.error('window.getAnswer requires cookie value as first parameter');
                } else {
                    return atob(cookie);
                }
            };
        </script>


    </div>
</div>
