<section class="mx-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-fill"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Location</a></li>
                            <li class="breadcrumb-item active text-light" aria-current="page">
                            <?php $last = $this->uri->total_segments();  $record_num = $this->uri->segment($last);
                               echo str_replace('-', ' ', $record_num);?>
                            </li>
                        </ol>
                    </nav>
                </section>