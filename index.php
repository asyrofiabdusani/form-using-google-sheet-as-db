<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Demo File Sheet</title>
    <link rel="icon" href="https://asyrofiabdusani.combbo.id/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dark-brown">
        <h1 class="py-5 text-center container">
            Demo Questionaire Using Google Sheet As Database
        </h1>
    </div>

    <form id="my-form" method="POST"
        action="https://script.google.com/macros/s/AKfycbzcM5mWttxYQA8mHgnIJP90lr8QFFyik4V-iXki-r6Hx6MaJaRzqBsuW6wCbwxujX4/exec">

        <div class="brown">
            <div class="row py-3 px-0 container">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" autocomplete="off" required />
                </div>
            </div>
            <h6 class="py-3 container">Please answer this questions. The data are only needed for this demo, you
                just need to
                choose any
                options.
            </h6>
        </div>

        <div class="dark-brown">
            <div class="col-md-6 py-3 container">
                <label class="form-label">1. Do you have pet?</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="have-pet" id="have-pet-yes" value="yes"
                            autocomplete="off">
                        <label class="form-check-label" for="have-pet-yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="have-pet" id="have-pet-no" value="no"
                            autocomplete="off">
                        <label class="form-check-label" for="have-pet-no">
                            No
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="brown">
            <div class="col-md-6 py-3 have-phone-box container">
                <label class="form-label">2. Do you have mobile phone?</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="have-phone" id="have-phone-yes" value="yes"
                            autocomplete="off">
                        <label class="form-check-label" for="have-phone-yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="have-phone" id="have-phone-no" value="no"
                            autocomplete="off">
                        <label class="form-check-label" for="have-phone-no">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-6 py-3 many-pet-box container">
                <label class="form-label" for="how-many-pet">2. How many pet do you have?</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="how-many-pet" name="how-many-pet" />
                </div>
            </div>
        </div>

        <div class="dark-brown">
            <div class="col-md-6 py-3 kind-pet-box container">
                <label class="form-label">3. What kind of pet do you have? (can choose more than 1)</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input pet-check" type="checkbox" id="cat" name="kind-of-pet-opt[]"
                            value="cat">
                        <label class="form-check-label" for="cat">
                            Cat
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input pet-check" type="checkbox" id="dog" name="kind-of-pet-opt[]"
                            value="dog">
                        <label class="form-check-label" for="dog">
                            Dog
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input pet-check" type="checkbox" id="snake" name="kind-of-pet-opt[]"
                            value="snake">
                        <label class="form-check-label" for="snake">
                            Snake
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input pet-check" type="checkbox" id="other-pet"
                            name="kind-of-pet-opt[]" value="other">
                        <label class="form-check-label" for="other-pet">
                            Other
                        </label>
                    </div>
                    <input type="hidden" class="form-control mt-3" id="kind-of-pet-opt" name="kind-of-pet-opt[]"
                        autocomplete="off" />
                    <input type="hidden" name="kind-of-pet" id="kind-of-pet">
                </div>
            </div>

            <div class="col-md-6 py-3 phone-brand-box container">
                <label class="form-label">3. What is your phone brand? (can choose more than 1)</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input phone-check" type="checkbox" id="apple" name="phone-brand-opt[]"
                            value="apple">
                        <label class="form-check-label" for="apple">
                            Apple
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input phone-check" type="checkbox" id="samsung"
                            name="phone-brand-opt[]" value="samsung">
                        <label class="form-check-label" for="samsung">
                            Samsung
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input phone-check" type="checkbox" id="xiaomi" name="phone-brand-opt[]"
                            value="xiaomi">
                        <label class="form-check-label" for="xiaomi">
                            Xiaomi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input phone-check" type="checkbox" id="other-phone"
                            name="phone-brand-opt[]" value="other">
                        <label class="form-check-label" for="other-phone">
                            Other
                        </label>
                    </div>
                    <input type="hidden" class="form-control mt-3" name="phone-brand-opt[]" id="phone-brand-opt"
                        autocomplete="off" />
                    <input type="hidden" name="phone-brand" id="phone-brand" autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="brown">
            <div class="col-md-6 py-3 pet-name-box container">
                <label class="form-label" for="pet-name">4. What is your pet name?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pet-name" name="pet-name" autocomplete="off" />
                </div>
            </div>

            <div class="col-md-6 py-3 best-phone-box container">
                <label class="form-label" for="best-phone-brand">4. Which the best phone brand in your
                    opinion?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="best-phone-brand" name="best-phone-brand"
                        autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="dark-brown">
            <div class="container py-5">
                <button type="submit" class="btn btn-outline-warning bt-submit" name="submit"
                    value="submit">Submit</button>
            </div>
        </div>

    </form>

    <script src="script.js"></script>

</html>