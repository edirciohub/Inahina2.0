@extends('layouts.master')

@section('content')

    <!-- Table Start -->
    <section class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body bg-primary rounded">
                        <h2 class="text-white">Mesagens</h2>
                    </div>
                    <ul class="nav nav-tabs mt-1" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox"
                               href="#inbox" role="tab" aria-selected="true">
                                <span class="d-block d-md-none"><i class="bi-envelope text-danger"></i></span>
                                <span class="d-none d-md-block text-uppercase"> Caixa de Entrada</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent"
                               href="#sent" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                <span class="d-none d-md-block text-uppercase">Enviadas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="spam-tab" data-toggle="tab" aria-controls="spam"
                               href="#spam" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="bi bi-star"></i></span>
                                <span class="d-none d-md-block text-uppercase">Com estrela</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete"
                               href="#delete" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="bi bi-trash text-danger"></i></span>
                                <span class="d-none d-md-block text-uppercase">Rascunho</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete"
                               href="#delete" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-trash"></i></span>
                                <span class="d-none d-md-block text-uppercase">Spam</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete"
                               href="#delete" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-trash"></i></span>
                                <span class="d-none d-md-block text-uppercase">Apagadas</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="row p-2 no-gutters align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>350 Unread emails</h3>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <ul class="list-inline dl mb-0 float-left float-md-right text-end">
                            <li class="list-inline-item text-info mr-3">
                                <a href="message.html" class="text-decoration-none">
                                    <button class="btn btn-circle btn-primary text-white"
                                            href="javascript:void(0)">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <span class="ml-2 font-normal text-dark">Compose</span>
                                </a>
                            </li>
                            <li class="list-inline-item text-danger">
                                <a href="#" class="text-decoration-none">
                                    <button class="btn btn-circle btn-danger text-white"
                                            href="javascript:void(0)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <span class="ml-2 font-normal text-dark">Delete</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                        <tbody>
                        <!-- row -->

                        <tr>
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst1" />
                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star text-warning"></i></td>
                            <td>
                                <span class="mb-0 text-muted">Hritik Roshan</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                                <span
                                                    class="badge badge-pill text-bg-danger text-white mr-2">Primary</span>
                                    <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted">May 13</td>
                        </tr>
                        <!-- row -->
                        <tr>
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst2" />
                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star"></i></td>
                            <!-- User -->
                            <td>
                                <span class="mb-0 text-muted">Genelia Roshan</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                                <span
                                                    class="badge badge-pill text-bg-info text-white mr-2">Business</span>
                                    <span class="text-dark">Inquiry about license for Admin </span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted">May 13</td>
                        </tr>
                        <!-- row -->
                        <tr>
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst3" />
                                    <label class="custom-control-label" for="cst3">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star text-warning"></i></td>
                            <!-- User -->
                            <td class="user-name max-texts">
                                <span class="mb-0 text-muted font-light">Ritesh Deshmukh</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                                <span
                                                    class="badge badge-pill text-white text-bg-warning mr-2">Friend</span>
                                    <span class="font-light text-dark">Bitbucket (commit Pushed) by
                                                    Ritesh</span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted font-light">May 13</td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst4" />
                                    <label class="custom-control-label" for="cst4">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star"></i></td>
                            <!-- User -->
                            <td>
                                <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                    <span class="badge badge-pill text-white text-bg-info mr-2">Work</span>
                                    <span class="font-light text-dark">Perspiciatis unde omnis- iste
                                                    Lorem ipsum</span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted font-light">May 9</td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst5" />
                                    <label class="custom-control-label" for="cst5">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star"></i></td>
                            <!-- User -->
                            <td>
                                <span class="mb-0 text-muted font-light">John Abraham</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                                <span
                                                    class="badge badge-pill text-white text-bg-success mr-2">Work</span>
                                    <span class="font-light text-dark">Lorem ipsum perspiciatis- unde
                                                    omnis</span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted font-light">Mar 10</td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst6" />
                                    <label class="custom-control-label" for="cst6">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star text-warning"></i></td>
                            <!-- User -->
                            <td>
                                <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                                <span
                                                    class="badge badge-pill text-white text-bg-success mr-2">Work</span>
                                    <span class="font-light text-dark">Lorem ipsum perspiciatis -
                                                    unde</span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted font-light">Mar 09</td>
                        </tr>
                        <!-- row -->
                        <tr class="">
                            <!-- label -->
                            <td class="pl-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cst7" />
                                    <label class="custom-control-label" for="cst7">&nbsp;</label>
                                </div>
                            </td>
                            <!-- star -->
                            <td><i class="fa fa-star text-warning"></i></td>
                            <!-- User -->
                            <td>
                                <span class="mb-0 text-muted font-light">Hanna Gover</span>
                            </td>
                            <!-- Message -->
                            <td>
                                <a class="link text-decoration-none" href="viewMessage.html">
                                                <span
                                                    class="badge badge-pill text-white text-bg-danger mr-2">Work</span>
                                    <span class="font-light text-dark"> Unde omnis Lorem ipsum
                                                    perspiciatis</span>
                                </a>
                            </td>
                            <!-- Attachment -->
                            <td><i class="fa fa-paperclip text-muted"></i></td>
                            <!-- Time -->
                            <td class="text-muted font-light">Mar 09</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
    <!-- Table End -->


@endsection
