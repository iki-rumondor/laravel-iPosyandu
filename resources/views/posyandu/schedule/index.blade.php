@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        @include('partials.header')
    </div>

    <div class="row">
        <div class="col-xl-6 mb-2 mb-xl-0">
            <div class="card card-body border-0 shadow">
                <form action="/posyandu/schedule" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label for="location">Lokasi</label>
                        <select name="posyandu_id" id="location" class="form-select">
                            <option hidden>--Pilih Posyandu--</option>
                            @foreach ($posyandu as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="schedule">Jadwal Posyandu</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <input name="date" data-datepicker="" class="form-control datepicker-input" id="schedule"
                                type="text" placeholder="Bulan/Tanggal/Tahun" required>
                            <div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom"
                                style="left: 1398.97px; top: 304.172px;">
                                <div class="datepicker-picker">
                                    <div class="datepicker-header">
                                        <div class="datepicker-title" style="display: none;"></div>
                                        <div class="datepicker-controls"><button type="button"
                                                class="btn prev-btn">«</button><button type="button"
                                                class="btn view-switch">May 2023</button><button type="button"
                                                class="btn next-btn">»</button></div>
                                    </div>
                                    <div class="datepicker-main">
                                        <div class="datepicker-view">
                                            <div class="days">
                                                <div class="days-of-week"><span class="dow">Su</span><span
                                                        class="dow">Mo</span><span class="dow">Tu</span><span
                                                        class="dow">We</span><span class="dow">Th</span><span
                                                        class="dow">Fr</span><span class="dow">Sa</span></div>
                                                <div class="datepicker-grid"><span class="datepicker-cell day prev"
                                                        data-date="1682784000000">30</span><span
                                                        class="datepicker-cell day selected focused"
                                                        data-date="1682870400000">1</span><span class="datepicker-cell day"
                                                        data-date="1682956800000">2</span><span class="datepicker-cell day"
                                                        data-date="1683043200000">3</span><span class="datepicker-cell day"
                                                        data-date="1683129600000">4</span><span class="datepicker-cell day"
                                                        data-date="1683216000000">5</span><span class="datepicker-cell day"
                                                        data-date="1683302400000">6</span><span class="datepicker-cell day"
                                                        data-date="1683388800000">7</span><span class="datepicker-cell day"
                                                        data-date="1683475200000">8</span><span class="datepicker-cell day"
                                                        data-date="1683561600000">9</span><span class="datepicker-cell day"
                                                        data-date="1683648000000">10</span><span class="datepicker-cell day"
                                                        data-date="1683734400000">11</span><span class="datepicker-cell day"
                                                        data-date="1683820800000">12</span><span class="datepicker-cell day"
                                                        data-date="1683907200000">13</span><span class="datepicker-cell day"
                                                        data-date="1683993600000">14</span><span class="datepicker-cell day"
                                                        data-date="1684080000000">15</span><span class="datepicker-cell day"
                                                        data-date="1684166400000">16</span><span class="datepicker-cell day"
                                                        data-date="1684252800000">17</span><span class="datepicker-cell day"
                                                        data-date="1684339200000">18</span><span class="datepicker-cell day"
                                                        data-date="1684425600000">19</span><span class="datepicker-cell day"
                                                        data-date="1684512000000">20</span><span class="datepicker-cell day"
                                                        data-date="1684598400000">21</span><span class="datepicker-cell day"
                                                        data-date="1684684800000">22</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1684771200000">23</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1684857600000">24</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1684944000000">25</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1685030400000">26</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1685116800000">27</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1685203200000">28</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1685289600000">29</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1685376000000">30</span><span
                                                        class="datepicker-cell day"
                                                        data-date="1685462400000">31</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1685548800000">1</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1685635200000">2</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1685721600000">3</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1685808000000">4</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1685894400000">5</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1685980800000">6</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1686067200000">7</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1686153600000">8</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1686240000000">9</span><span
                                                        class="datepicker-cell day next"
                                                        data-date="1686326400000">10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="datepicker-footer">
                                        <div class="datepicker-controls"><button type="button" class="btn today-btn"
                                                style="display: none;">Today</button><button type="button"
                                                class="btn clear-btn" style="display: none;">Clear</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary" disabled>Tambah</button>
                    </div>

                </form>

            </div>
        </div>


        <div class="col-xl-6">
            <div class="card card-body border-0 shadow table-wrapper table-responsive">
                <table id="schedules-table" class="table table-hover display">
                    <thead>
                        <tr>
                            <th class="border-gray-200">Lokasi Posyandu</th>
                            <th class="border-gray-200">Jadwal</th>
                            <th class="border-gray-200">Status</th>
                            <th class="border-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" autocomplete="off">
                    @method('patch')
                    @csrf
                    <div class="modal-header bg-secondary">
                        <h2 class="h6 modal-title">Ubah Jadwal Posyandu</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="schedule">Jadwal Posyandu</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input name="date" id="date" data-datepicker="" class="form-control datepicker-input"
                                    id="schedule" type="text" placeholder="Bulan/Tanggal/Tahun" required>
                                <div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom"
                                    style="left: 1398.97px; top: 304.172px;">
                                    <div class="datepicker-picker">
                                        <div class="datepicker-header">
                                            <div class="datepicker-title" style="display: none;"></div>
                                            <div class="datepicker-controls"><button type="button"
                                                    class="btn prev-btn">«</button><button type="button"
                                                    class="btn view-switch">May 2023</button><button type="button"
                                                    class="btn next-btn">»</button></div>
                                        </div>
                                        <div class="datepicker-main">
                                            <div class="datepicker-view">
                                                <div class="days">
                                                    <div class="days-of-week"><span class="dow">Su</span><span
                                                            class="dow">Mo</span><span class="dow">Tu</span><span
                                                            class="dow">We</span><span class="dow">Th</span><span
                                                            class="dow">Fr</span><span class="dow">Sa</span></div>
                                                    <div class="datepicker-grid"><span class="datepicker-cell day prev"
                                                            data-date="1682784000000">30</span><span
                                                            class="datepicker-cell day selected focused"
                                                            data-date="1682870400000">1</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1682956800000">2</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683043200000">3</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683129600000">4</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683216000000">5</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683302400000">6</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683388800000">7</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683475200000">8</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683561600000">9</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683648000000">10</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683734400000">11</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683820800000">12</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683907200000">13</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1683993600000">14</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684080000000">15</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684166400000">16</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684252800000">17</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684339200000">18</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684425600000">19</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684512000000">20</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684598400000">21</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684684800000">22</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684771200000">23</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684857600000">24</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1684944000000">25</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1685030400000">26</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1685116800000">27</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1685203200000">28</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1685289600000">29</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1685376000000">30</span><span
                                                            class="datepicker-cell day"
                                                            data-date="1685462400000">31</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1685548800000">1</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1685635200000">2</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1685721600000">3</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1685808000000">4</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1685894400000">5</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1685980800000">6</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1686067200000">7</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1686153600000">8</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1686240000000">9</span><span
                                                            class="datepicker-cell day next"
                                                            data-date="1686326400000">10</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="datepicker-footer">
                                            <div class="datepicker-controls"><button type="button" class="btn today-btn"
                                                    style="display: none;">Today</button><button type="button"
                                                    class="btn clear-btn" style="display: none;">Clear</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Update</button>
                        <button type="button" class="btn btn-link text-gray-600 ms-auto"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" autocomplete="off">
                    @method('delete')
                    @csrf
                    <div class="modal-header bg-danger">
                        <h2 class="h6 modal-title text-white">Hapus Data Posyandu</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tekan tombol <b class="text-danger">Hapus</b> dibawah untuk mengkonfirmasi jadwal posyandu
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-link text-gray-600 ms-auto"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script>
        $('#location').change(function() {
            fetch('/fetch/set-schedules-table/' + $(this).val())
                .then(response => {
                    return response.text()
                })
                .then(data => {
                    $('#schedules-table tbody').html(data)
                })
            $('button[type=submit]').removeAttr('disabled')

        })
    </script>
@endpush
