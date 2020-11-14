<div>

<style>

#grid-container {

display: inline-flex;

}


.grid-cell--white {
	background: white;
}

.grid-cell--black {
	background: white;
}

.grid-cell {
	width: 20px;
	height: 20px;
}



</style>

    <h1>Task 3/7</h1>
    <div class="question-wrapper">

        <div id="grid-container" ></div>
        <script>
            var field = [
                [0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                [1, 1, 1, 1, 0, 1, 0, 0, 0,
                    0, 1, 1, 1, 1, 0, 1, 0, 0, 0, 1],
                [1, 0, 0, 0, 0, 1, 0, 0, 0,
                    0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0],
                [1, 1, 1, 0, 0, 1, 0, 0, 0,
                    0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0],
                [1, 0, 0, 0, 0, 1, 0, 0, 0,
                    0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0],
                [1, 0, 0, 0, 0, 1, 1, 1, 1,
                    0, 1, 1, 1, 1, 0, 1, 0, 0, 0, 1],
                [0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            ];

            var container = document.getElementById('grid-container');

            for (var i = 0; i < field.length; i++) {

                var row = field[i];
                const rowEl = document.createElement('div');
                rowEl.className = 'grid-row';

                for (var j = 0; j < row.length; j++) {
                    var cell = row[j];
                    var cellEl = document.createElement('div');
                    cellEl.className = 'grid-cell';
                    if (cell === 1) {
                        cellEl.className += ' grid-cell--black';
                    } else {
                        cellEl.className += ' grid-cell--white';
                    }
                    rowEl.appendChild(cellEl);
                }

                container.appendChild(rowEl);
            }
        </script>


    </div>
</div>
