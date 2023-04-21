<x-master title="Mon Profile">
    <h1>Mon Profile</h1>
    <section class="vh-60" style="background-color: #eee;border-radius:40px ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: 30px;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-black"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img  src="{{ asset('storage/'.$Profiles['image']) }}" alt="Avatar"
                                    class="img-fluid my-5" style="width: 90px;" />
                                <h5>hamza</h5>
                                <p>Web Designer</p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Name</h6>
                                            <p class="text-muted">{{ $Profiles['name'] }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>ID</h6>
                                            <p class="text-muted">{{ $Profiles['id'] }}</p>
                                        </div>
                                    </div>
                                    <h6>Details</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ $Profiles['email'] }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Body</h6>
                                            <p class="text-muted">{{ $Profiles['bio'] }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    

</x-master>
