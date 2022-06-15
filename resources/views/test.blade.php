<style>
    select option {
        padding: 8px;
    }

    select {
        z-index: 1800;
        position: absolute;
        background: #fff;
        height: 33px;
        overflow: hidden;
        width: 30%;
        outline: none;
    }
</style>

<select id="colored_select" size="2" onclick="select_option()">
    <option value="" selected>Select</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    <option value="4">Four</option>
    <option value="5">Five</option>
    <option value="6">Six</option>
    <option value="7">Seven</option>
    <option value="8">Eight</option>
</select>

<script>
    function select_option() {
        var selectBox = document.getElementById("colored_select");
        $size = selectBox.size;
        $set_size = 4;
        if ($size == $set_size) {
            selectBox.size = 2;
            selectBox.style.overflow = 'hidden';
        } else {
            selectBox.size = $set_size;
            selectBox.style.height = 'auto';
            selectBox.style.overflow = 'auto';
        }
        var selectedOptionTop = selectBox.options[selectBox.selectedIndex].offsetTop;
        selectBox.scrollTop = selectedOptionTop;
    }
</script>
