            <form
                method="post"
                class="task-form"
            >
                <input 
                    type="text" 
                    name="answer" 
                    id="answer" 
                    placeholder="answer"
                    autocomplete="off"
                >
                <button type="submit" class="primary task-button">Submit</button>
            </form>
        
    </div>

<script>
    const alertElements = document.querySelectorAll('.alert');
    setTimeout(function () {
        if (alertElements){
            for (var i = 0; i < alertElements.length; i++){
                alertElements[i].style.top = '-100px';
            }
        }
    }, 2000);
    setTimeout(function () {
        if (alertElements){
            for (var i = 0; i < alertElements.length; i++){
                alertElements[i].parentNode.removeChild(alertElements[i]);
            }
        }
    }, 3000);
</script>
</body>
</html>