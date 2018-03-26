<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<br><br><br><br>
<style>
    .ui-menu {
        list-style: none;
        padding: 2px;
        margin: 0;
        display: block;
    }

        .ui-menu .ui-menu {
            margin-top: -3px;
        }

        .ui-menu .ui-menu-item {
            margin: 0;
            padding: 0;
            zoom: 1;
            float: left;
            clear: left;
            width: 100%;
            font-size: 80%;
        }

            .ui-menu .ui-menu-item a {
                text-decoration: none;
                display: block;
                padding: .2em .4em;
                line-height: 1.5;
                zoom: 1;
            }

                .ui-menu .ui-menu-item a.ui-state-hover,
                .ui-menu .ui-menu-item a.ui-state-active {
                    font-weight: normal;
                    margin: -1px;
                }
</style>

<section id="section_one">
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-12">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <form role="search" action="<?php echo base_url();?>business/lead_lookup/search/" method="post">
                            <input id="id" type="text" id="swSearch" class="form-control input-lg" name="searchBox" placeholder="search" style="float: left; width: 80%;" />
                            <input type="submit" value="Search" class="btn btn-info btn-lg" style="float: right;">
                        </form>
                        <ul style="width: 80%;">
                            <div style="background-color: #ffffff; border: none; box-shadow: none;" class="well" id="result"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="best-deal">
        <div class="container" style="margin-top: -50px; padding-top: 50px;">
            <div class="row">

                <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-property">
                        <div class="fh5co-property-innter">
                            <h3><a href="#">Villa In Hialeah, Dade County</a></h3>
                            <div class="price-status">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
                        </div>
                        <p class="fh5co-property-specification">
                            <a href="" class="btn btn-primary " data-toggle="modal" data-target="#myModal">suggestion</a>
                        </p>
                    </div>
                </div>
            </div>
        </div><hr>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Heading</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form">
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" />

                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="employee_size" id="emp_size" placeholder="Employee Size" />

                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="revenue" id="revenue" placeholder="Revenue" />

                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="location" id="location" placeholder="Location" />

                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="industry" id="industry" placeholder="Industry" />

                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="url" class="form-control" name="website" id="website" placeholder="Website" />

                                    </div>

                                </div>


                                <div class="text-center float-right"><button type="submit" class="btn btn-primary">SUBMIT</button></div>
                                <div><button type="reset" class="btn btn-warning float-left">Reset</button></div>


                            </form>
                            <div class="modal-footer">
                               
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(isset($query_result)) {
    echo "
    <div class='container' style='background-color: white;padding: 10px;'>
        <h2 class='text-center'><b>LEADS</b></h2>
        <div class='notice notice-lg'>
            ";
            foreach ($query_result->result() as $row) {?>

            <ul id="notice-ul">
                <li><a href="" data-toggle="modal" data-target="#nameModal"><?php echo $row->name; ?></a></li>
                <li><a href="" data-toggle="modal" data-target="#empSizeModal"><?php echo $row->emp_size; ?></a></li>
                <li><a href="" data-toggle="modal" data-target="#revenueModal"><?php echo $row->revenue; ?></a></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#locationModal">
                        <?php echo $row->address; ?>
                    </a>
                </li>
                <li><a href="" data-toggle="modal" data-target="#industryModal"><?php echo $row->industry; ?></a></li>
                <li><a href="" data-toggle="modal" data-target="#websiteModal"><?php echo $row->website; ?></a></li>
                <br>
                <br>
                <?php if(count($query_result->result()) > 1) : ?>
                <li><a href="<?php echo base_url();?>business/lead_lookup/<?php echo $row->ID;?>">View this company leads</a></li>
                <?php endif; ?>

            </ul>
            <br>

            <div class="modal fade" id="nameModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Suggest Another Name?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url();?>business/suggest/" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->ID ?>" />
                                <input type="hidden" name="field_edit" value="name" />
                                <input type="text" name="new_value" placeholder="New Name" />
                                <input type="submit" value="Suggest">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="empSizeModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Suggest Another Employee Size?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url();?>business/suggest/" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->ID ?>" />
                                <input type="hidden" name="field_edit" value="emp_size" />
                                <input type="text" name="new_value" placeholder="New Name" />
                                <input type="submit" value="Suggest">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="revenueModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Suggest Another Revenue?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url();?>business/suggest/" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->ID ?>" />
                                <input type="hidden" name="field_edit" value="revenue" />
                                <input type="text" name="new_value" placeholder="New Name" />
                                <input type="submit" value="Suggest">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="locationModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Suggest Another Location?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url();?>business/suggest/" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->ID ?>" />
                                <input type="hidden" name="field_edit" value="address" />
                                <input type="text" name="new_value" placeholder="New Name" />
                                <input type="submit" value="Suggest">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="industryModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Suggest Another Industry?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url();?>business/suggest/" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->ID ?>" />
                                <input type="hidden" name="field_edit" value="industry" />
                                <input type="text" name="new_value" placeholder="New Name" />
                                <input type="submit" value="Suggest">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="websiteModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Suggest Another Website?</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url();?>business/suggest/" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->ID ?>" />
                                <input type="hidden" name="field_edit" value="website" />
                                <input type="text" name="new_value" placeholder="New Name" />
                                <input type="submit" value="Suggest">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            echo "
        </div>
    </div>
    ";
    }
    ?>
    </div>

    <br><br><br>

    <?php if(isset($employee_data)) {
    echo "
    <div class='container' style='background-color: white;padding: 10px;'>
        <h2 class='text-center'><b>EMPLOYEES</b></h2>
        <div class='notice notice-lg'>
            ";
            ?>
            <div class="input-group col-md-12">
                <form role="search" action="<?php echo current_url();?>" method="get">
                    <input type="text" class="form-control input-lg" name="filter" placeholder="Flter by designation" style="float: left; width: 80%;" />
                    <input type="submit" value="Fiter" class="btn btn-info btn-lg" style="float: right;">
                </form>
            </div>

            <?php
            foreach ($employee_data->result() as $row) {?>

            <ul id="notice-ul">
                <li><?php echo $row->firstname; ?></li>
                <li><?php echo $row->lastname; ?></li>
                <li><?php echo $row->designation; ?></li>
                <li><?php echo $row->linkedin; ?></li>
                <li><?php echo $row->email; ?></li>
            </ul>
            <br>
            <?php }
            echo "
        </div>
    </div>
    ";
    }
    ?>

</section>

<!-- Modal -->
	<?php include 'include/footer.php'; ?>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#id").autocomplete({
            minLength: 1,
            source:
            function (req, add) {
                $.ajax({
                    url: "<?php echo base_url(); ?>business/search_suggestions",
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success:
                    function (data) {
                        if (data.response == "true") {
                            add(data.message);
                        }
                    },
                });
            },

        });
    });
</script> 