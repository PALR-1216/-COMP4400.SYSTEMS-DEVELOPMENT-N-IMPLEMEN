
<?php include("_ClientNavbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pay Bill</title>
</head>
<body>


<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="card">
      <div class="card-body">
        <div class="row d-flex justify-content-center pb-5">
          <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
            <div class="py-4 d-flex flex-row">
              <h5><span class="far fa-check-square pe-2"></span><b>ELIGIBLE</b> |</h5>
              <span class="ps-2">Pay</span>
            </div>

         
            <h4 class="text-success">$500.00</h4>
            <h4>Monthly Rent Amount</h4>

            <div class="d-flex pt-2">
              <div>
                <p>
                  <b>Due Date: <span class="text-danger">12/24/2023</span></b>
                </p>
              </div>
            </div>


            <div class="d-flex pt-2">
              <div>
                <p>
                  <b>Insurance <span class="text-success">$71.76</span></b>
                </p>
              </div>
            </div>

           

            <div class="d-flex">
              <div>
                <p>
                  <b>Maintenance <span class="text-success">$100</span></b>
                </p>
              </div>
            </div>
            

            <div class="d-flex">
              <div>
                <p>
                  <b>Intereses <span class="text-danger">$50</span></b>
                </p>
              </div>
            </div>

           

            <hr />
            <div class="pt-2">
              <div class="d-flex pb-2">
                <div class="ms-auto">
                  <p class="text-primary">
                    <a  href="AddClientCard.php" class="fas fa-plus-circle text-primary pe-1">Add payment card</a>
                  </p>
                </div>
              </div>
              <p>
                This is an estimate for the portion of your order (not covered by
                insurance) due today . once insurance finalizes their review refunds
                and/or balances will reconcile automatically.
              </p>
              <form class="pb-3">
                <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                      value="" aria-label="..." checked />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Visa Debit
                      Card
                    </p>
                    <div class="ms-auto">************3456</div>
                  </div>
                </div>

                <!-- if no card then show Big button add Card -->

                <div class="d-flex flex-row">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                      value="" aria-label="..." />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                      Office
                    </p>
                    <div class="ms-auto">************1038</div>
                  </div>
                </div>
              </form>
              <a type="button" href="InvoiceReceipt.php" class="btn btn-primary btn-block btn-lg">Pay Now</a>
            </div>
          </div>

          <div class="col-md-5 col-xl-4 offset-xl-1">
            <div class="py-4 d-flex justify-content-end">
              <h6><a href="ClientHome.php">Cancel and return to HomePage</a></h6>
            </div>

            <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
              <div class="p-2 me-3">
                <h4>Order Recap</h4>
                
              </div>

              <div class="p-2 d-flex">
                <div class="col-8">Contracted Price</div>
                <div class="ms-auto">$500</div>
              </div>
             
           
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8">Total Deductible, Coinsurance, and Copay</div>
                <div class="ms-auto">$80.00</div>
              </div>
             
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8">Insurance</div>
                <div class="ms-auto"><b>$50.76</b></div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">
                Maintenance <span class="fa fa-question-circle text-dark"></span>
                </div>
                <div class="ms-auto"><b>$71.76</b></div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8"><b>Total</b></div>
                <div class="ms-auto"><b class="text-success">$85.00</b></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>