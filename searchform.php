
<form class="d-flex form-group" action="<?php echo home_url('/'); ?>">
    <input class="form-control rounded-0" type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" aria-label="Search" name="s">
    <button class="btn btn-danger rounded-0" type="submit"><i class="bi bi-search"></i></button>
</form>