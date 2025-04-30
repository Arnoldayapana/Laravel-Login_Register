<x-layout>
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-7">
                <h1 class="fw-bold fs-4">Dashboard</h1>
            </div>
            <div class="col-7">
                <div class="card p-4 shadow">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-2 mt-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title"
                                class="form-control @error('title') border-danger @enderror" value="{{ old('title') }}">
                            @error('title')
                            {{ $message }}
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark">Post</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-7 mt-5">
                <h3 class="mx-3 fw-bold">Posts</h3>
            </div>
            <div class="col-7 mt-2">
                <div class="card shadow p-4">
                    <h6 class="fw-bold">John Doe <small class="text-secondary fw-small">2 second ago</small> </h6>


                    <p class="text-secondary"> {{ Str::words('Lorem dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus rerum adipisci commodi corporis Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus rerum adipisci commodi corporis.',20) }}</p>
                    <div>
                        <a href="#" class="text-decoration-none">Like</a>
                        <a href="#" class="text-decoration-none">share</a>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-2">
                <div class="card shadow p-4">
                    <h6 class="fw-bold">james bond</h6>

                    <p class="text-secondary">eius veritatis? Facere debitis non cupiditate exercitationem quasi.</p>
                    <div>
                        <a href="#" class="text-decoration-none">Like</a>
                        <a href="#" class="text-decoration-none">share</a>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-2">
                <div class="card shadow p-4">
                    <h6 class="fw-bold">joey jay</h6>

                    <p class="text-secondary"> {{ Str::words("ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus Facere debitis non cupiditate exercitationem quasi.",20) }}</p>
                    <div>
                        <a href="#" class="text-decoration-none">Like</a>
                        <a href="#" class="text-decoration-none">share</a>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-2">
                <div class="card shadow p-4">
                    <h6 class="fw-bold">mile sin</h6>

                    <p class="text-secondary"> ipsum dolor sit amet consectetur adipisicing elit. Odio quos nisi facere recusandae necessitatibus nemo id,
                        repellendus rerum adipisci commodi corporis, ut, eius veritatis? exercitationem quasi.</p>
                    <div>
                        <a href="#" class="text-decoration-none">Like</a>
                        <a href="#" class="text-decoration-none">share</a>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-2">
                <div class="card shadow p-4">
                    <h6 class="fw-bold">Lov dove</h6>

                    <p class="text-secondary">Lorem ipsum dolor sit necessitatibus nemo id,
                        repellendus rerum adipisci commodi corporis, ut, eius veritatis? Facere debitis non cupiditate exercitationem quasi.</p>
                    <div>
                        <a href="#" class="text-decoration-none">Like</a>
                        <a href="#" class="text-decoration-none">share</a>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-2">
                <div class="card shadow p-4">
                    <h6 class="fw-bold">Heart bomb</h6>

                    <p class="text-secondary"> ut, eius veritatis? Facere debitis non cupiditate exercitationem quasi.</p>
                    <div>
                        <a href="#" class="text-decoration-none">Like</a>
                        <a href="#" class="text-decoration-none">share</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>