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

        <div class="col">    
        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="city">
        </div>
        <label for="formGroupExampleInput">市</label>        
    </div>

    <div class="form-group row">
        <div class="col">
        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="comm">
        </div>
        <label for="formGroupExampleInput">小区</label>
    </div>

    <div class="form-group row">
        <div class="col">
        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="build">
        </div>
        <label for="formGroupExampleInput">号楼</label>
    </div>

    <div class="form-group row">
        <div class="col">
        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="unit">
        </div>
        <label for="formGroupExampleInput">单元</label>
    </div>

    <div class="form-group row">
        <div class="col">
        <input type="text" placeholder="<?php esc_attr_e( '', 'colormag' ); ?>" class="form-control" name="s">
        </div>
        <label for="formGroupExampleInput">室</label>
    </div>

    <div class="form-group row">
        <div class="col">
        <button class="btn btn-success" type="submit">搜索</button>
        </div>
    </div>
   
</form><!-- .searchform -->