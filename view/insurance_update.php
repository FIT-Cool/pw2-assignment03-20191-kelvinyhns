<?php
//Block below for fetch data

$id = filter_input(INPUT_GET,'id');
if (isset($id)){
    $insurance = getInsurance($id);
}
//Block below for Update
$submitted = filter_input(INPUT_POST,'btnUpdate');
if(isset($submitted)){
    $name=filter_input(INPUT_POST, 'txtName');
    updateInsurance($insurance['id'],$name);
    header("location:index.php?menu=genre");
    //updateGenre($id,$name);
}

?>
<form action="#" method="post">
    <fieldset>
        <legend>Update Genre</legend>
        <label for="txtNameIdx" class="form-label">Name</label>
        <input type="text" id="txtNameIdx" name="txtName" placeholder="Name (e.g.Cooking)"
               autofocus required class="form-input"
               value="<?php echo $insurance['name'];?>">
        <input type="submit" name="btnUpdate" value="Update Genre" class="button button-primary">
    </fieldset>
</form>
