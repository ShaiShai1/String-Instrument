<style>
    body {
        background-color: #f0f0f0; 
        color: #000; 
    }

    /* Override the default icon color */
    .icon i {
        color: #000; 
    }

    .statistic-block {
        background-color: #fff;
        border: 1px solid #e1e1e1;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        height: 200px; 
        padding: 15px; 
    }

    .progress {
        height: 10px;
    }

    .page-content,
    .page-header {
        background-color: #f0f0f0;
        padding: 20px 15px; 
    }

    .title strong {
    color: #000;
}
</style>

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <!-- body -->
            <div class="row">
                <div class="col-3">
                    <div class="statistic-block block total-clients">
                        <div class="progress-details">
                            <div class="title">
                                <div class="icon" "color:black;"><i class="icon-user-1"></i></div>
                                <strong >Total Clients</strong>
                            </div>
                            <div class="number">{{ $user }}</div>
                        </div>
                        <div class="progress">
                            <div role="progressbar" style="width: 30%; background-color: #007bff;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic-block block">
                        <div class="progress-details">
                            <div class="title">
                                <div class="icon"><i class="icon-contract"></i></div>
                                <strong>Total Products</strong>
                            </div>
                            <div class="number">{{ $product }}</div>
                        </div>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%; background-color: #28a745;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic-block block total-orders">
                        <div class="progress-details">
                            <div class="title">
                                <div class="icon"><i class="icon-paper-and-pencil"></i></div>
                                <strong>Total Orders</strong>
                            </div>
                            <div class="number">{{ $order }}</div>
                        </div>
                        <div class="progress">
                            <div role="progressbar" style="width: 55%; background-color: #ffc107;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="statistic-block block">
                        <div class="progress-details">
                            <div class="title">
                                <div class="icon"><i class="icon-writing-whiteboard"></i></div>
                                <strong>Total Delivered</strong>
                            </div>
                            <div class="number">{{ $delivered }}</div>
                        </div>
                        <div class="progress">
                            <div role="progressbar" style="width: 35%; background-color: #dc3545;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
    </div>
</div>