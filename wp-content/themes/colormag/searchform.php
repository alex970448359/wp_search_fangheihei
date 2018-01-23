<?php
/**
 * Displays the searchform of the theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <div class="form-group row">    
        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="prov">
        <label for="formGroupExampleInput">省</label>

        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="city">
        <label for="formGroupExampleInput">市</label>

        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="dist">
        <label for="formGroupExampleInput">区</label>

        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="comm">
        <label for="formGroupExampleInput">小区</label>

        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="build">
        <label for="formGroupExampleInput">号楼</label>

        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="unit">
        <label for="formGroupExampleInput">单元</label>

        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="s">
        <label for="formGroupExampleInput">室</label>
    </div>
    <button class="btn btn-success" type="submit">搜索</button>

   
</form><!-- .searchform -->