<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create</title>
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Create User</h1>
        </div>
        <form action="<?= site_url('/user/create'); ?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
            <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Create User</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('/user/create'); ?>" method="post">
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="lname" required />
                            </div>
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control" id="fname" required />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required />
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" class="form-select" id="gender" required>
                                    <option value="">Select gender...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Add</button>
                                <a href="<?= site_url('user/read'); ?>" class="btn btn-secondary">Back to records</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>