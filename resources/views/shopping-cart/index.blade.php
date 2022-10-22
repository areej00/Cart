@extends('layouts.master')
@section('content')
<div class="container py-5">
    <!-- For Demo Purpose-->
    <header class="text-center mb-5">
        <h1 class="display-4 font-weight-bold">CART TUTORIAL</h1>

    </header>


    <!-- First Row [Prosucts]-->
    <h2 class="font-weight-bold mb-2">Products</h2>
    <p class="font-italic text-muted mb-4">Given Products</p>

    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">Red Widegt</a></h5>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="small text-muted font-italic">
                                Code#R01
                            </p>
                            <p class="small text-muted font-italic">
                                Price: $32.95
                            </p>
                        </div>
                        <div class="col-md-6 float-right">
                            <a href="" id="add_cart" data-value="R01" class="btn btn-success add_cart">+</a>

                        </div>

                    </div>
                    <ul class="list-inline small">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-2_g4qame.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">Blue Widgets</a></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="small text-muted font-italic">Code#B01</p>
                            <p class="small text-muted font-italic">Price: 7.95</p>
                        </div>
                        <div class="col-md-6 float-right">
                            <a href="" id="add_cart" data-value="B01" class="btn btn-success add_cart">+</a>
                        </div>
                    </div>

                    <ul class="list-inline small">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-3_rk25rt.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">Green Widgtes </a></h5>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="small text-muted font-italic">Code#G01</p>
                            <p class="small text-muted font-italic">Price: $24.95</p>
                        </div>
                        <div class="col-md-6 float-right">
                            <a href="" id="add_cart" data-value="G01" class="btn btn-success add_cart">+</a>
                        </div>
                    </div>

                    <ul class="list-inline small">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>




    <!-- First Row [Statistics]-->
    <h2 class="font-weight-bold mb-2">Cost Calculation</h2>

    <div class="row pb-5">
        <div class="col-lg-12 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-5"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>

                    <table class="table table-bordered">
                        <thead>
                            <td>Orders</td>
                            <td>Actions</td>
                        </thead>
                        <tbody id="cost-form-body">
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar rounded-pill"></div>
                    </div>
                    <div class="card-body p-5"><i class="fa fa-shopping-bag fa-2x mb-3 text-warning"></i>
                        <h2 class="text-primary"> Total cost </h2>
                        <h3 id="total-cost"></h3>
                    </div>
                </div>
            </div>
        </div>



        <!-- Card -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="card rounded shadow-sm border-0">

            </div>
        </div>
    </div>
</div>
<script>
    var formArr = [];
    var prices = {
        "R01": 32.95,
        "G01": 24.95,
        "B01": 7.95
    }

    function CostCalculator() {
        var html = ``;
        for (var i = 0; i < formArr.length; i++) {
            html += `<tr>
					<td>
						${formArr[i]}
					</td>
					<td>
						<button class="btn btn-danger" onclick="onDelete(${i})">-</button>
					</td>
				</tr>`;
        }
        $("#cost-form-body").html(html);
    }

    function Total() {
        var orderCost = 0;
        for (var i = 0; i < formArr.length; i++) {
            orderCost += prices[formArr[i]];
        }
        if (formArr.filter(item => item == "R01").length > 1) {
            orderCost -= prices["R01"] / 2;
        }
        var delieveryCost = (orderCost >= 90) ? 0 : (orderCost >= 50 ? 2.95 : 4.95);
        var totalCost = Math.floor((orderCost + delieveryCost) * 100) / 100;
        if (orderCost == 0) {
            $('#total-cost').text('$0');
        } else {
            $('#total-cost').text('$' + totalCost);

        }
    }

    function onDelete(index) {
        formArr.splice(index, 1);
        CostCalculator();
        Total();
    }
    $(document).on('click', '.add_cart', function(e) {
        e.preventDefault();
        var productCode = $(this).data('value');
        if (!prices[productCode]) {
            alert("incorrect product code");
            return;
        }
        formArr.push(productCode);
        CostCalculator();
        Total();
    })

</script>
@endsection