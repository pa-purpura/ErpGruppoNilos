@extends('admin.layout')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Dipendenti </span>
    </h4>
    <div class="nav-align-left">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-left-align-anagrafica">Anagrafica</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-left-align-profile">Profile</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-left-align-messages">Messages</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-left-align-anagrafica">
                <div class="card-body d-flex">
                    <div class="col-md-3">
                        <img class="img-fluid rounded my-4" src="../../assets/img/avatars/10.png" height="110"
                            width="110" alt="User avatar" />
                        <div>
                            <h5 class="mb-2">Violet Mendoza</h5>
                            <span class="badge bg-label-secondary">Author</span>
                        </div>
                    </div>
                    <div class="info-container col-md-9">
                        <h5 class="pb-2 border-bottom mb-4">Anagrafica</h5>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 mt-4">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Username:</span>
                                        <span>violet.dev</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Email:</span>
                                        <span>vafgot@vultukir.org</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="me-4 mt-4">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Status:</span>
                                        <span class="badge bg-label-success">Active</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Ruolo:</span>
                                        <span>Author</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="me-5 mt-4">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">P.IVA:</span>
                                        <span>76899708965</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Codice fiscale:</span>
                                        <span>5879 456-7890</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="me-4 mt-4">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Tipo:</span>
                                        <span>Private</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-bold me-2">Kind:</span>
                                        <span>Dipendente</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-left-align-profile">
                <p>
                    Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream.
                    Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                    cheesecake
                    fruitcake.
                </p>
                <p class="mb-0">
                    Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton
                    candy liquorice caramels.
                </p>
            </div>
            <div class="tab-pane fade" id="navs-left-align-messages">
                <p>
                    Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                    cupcake
                    gummi bears cake chocolate.
                </p>
                <p class="mb-0">
                    Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                    roll
                    icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                    jelly-o
                    tart brownie jelly.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
