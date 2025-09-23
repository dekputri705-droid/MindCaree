@include('layouts.header')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="view/img/bg/14.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Test</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('queryform') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> Home</a></li>
                                <li>Assesment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h2 class="title-2">Uji Kesehatan Mental Anda</h2>

                    <form id="healthForm" action="{{ route('autoreport.post') }}" method="post">

                        @csrf

                        <h2>Questions for Education Issues:</h2>
                        <div class="mb-3">
                            <label for="student_q1">Apakah Anda merasa sangat cemas atau stres tentang pekerjaan sekolah atau ujian dalam dua minggu terakhir?</label>
                            <br>
                            <input type="radio" name="student_q1" value="yes" required> Ya
                            <input type="radio" name="student_q1" value="no" required> Tidak
                            @error('student_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="student_q2">Apakah Anda mengalami kesulitan berkonsentrasi pada pelajaran atau menyelesaikan tugas akhir-akhir ini?</label>
                            <br>
                            <input type="radio" name="student_q2" value="yes" required> Ya
                            <input type="radio" name="student_q2" value="no" required> Tidak
                            @error('student_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="student_q3">Apakah Anda kehilangan minat pada kegiatan ekstrakurikuler atau hobi yang biasanya Anda nikmati?</label>
                            <br>
                            <input type="radio" name="student_q3" value="yes" required> Ya
                            <input type="radio" name="student_q3" value="no" required> Tidak
                            @error('student_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="student_q4">Apakah Anda menghindari teman atau kegiatan sosial di universitas lebih dari biasanya?</label>
                            <br>
                            <input type="radio" name="student_q4" value="yes" required> Ya
                            <input type="radio" name="student_q4" value="no" required> Tidak
                            @error('student_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="student_q5">Pernahkah Anda merasa kewalahan dengan beban kerja akademis atau tekanan untuk berprestasi baik di universitas?</label>
                            <br>
                            <input type="radio" name="student_q5" value="yes" required> Ya
                            <input type="radio" name="student_q5" value="no" required> Tidak
                            @error('student_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>Pertanyaaan Untuk Masalah dalam Keluarga:</h2>
                        <div class="mb-3">
                            <label for="family_q1">Apakah Anda telah mengalami konflik atau argumen yang sering dengan anggota keluarga baru-baru ini?</label>
                            <br>
                            <input type="radio" name="family_q1" value="yes" required> Ya
                            <input type="radio" name="family_q1" value="no" required> Tidak
                            @error('family_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="family_q2">Apakah Anda merasa tidak didukung atau disalahpahami oleh keluarga Anda?</label>
                            <br>
                            <input type="radio" name="family_q2" value="yes" required> Ya
                            <input type="radio" name="family_q2" value="no" required> Tidak
                            @error('family_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="family_q3">Apakah Anda sudah menghindari menghabiskan waktu di rumah atau dengan anggota keluarga lebih dari biasanya?</label>
                            <br>
                            <input type="radio" name="family_q3" value="yes" required> Ya
                            <input type="radio" name="family_q3" value="no" required> Tidak
                            @error('family_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="family_q4">Apakah tanggung jawab keluarga menyebabkan Anda stres atau kecemasan yang signifikan?</label>
                            <br>
                            <input type="radio" name="family_q4" value="yes" required> Ya
                            <input type="radio" name="family_q4" value="no" required> Tidak
                            @error('family_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="family_q5">Apakah Anda merasa tidak aman atau tidak nyaman di lingkungan rumah Anda baru-baru ini?</label>
                            <br>
                            <input type="radio" name="family_q5" value="yes" required> Ya
                            <input type="radio" name="family_q5" value="no" required> Tidak
                            @error('family_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>Pertanyaan untuk Masalah Hubungan Sosial:</h2>
                        <div class="mb-3">
                            <label for="relationship_q1">Apakah Anda merasa terputus atau jauh dari pasangan Anda belakangan ini?</label>
                            <br>
                            <input type="radio" name="relationship_q1" value="yes" required> Ya
                            <input type="radio" name="relationship_q1" value="no" required> Tidak
                            @error('relationship_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="relationship_q2">Apakah Anda dan pasangan Anda sering bertengkar atau tidak setuju?</label>
                            <br>
                            <input type="radio" name="relationship_q2" value="yes" required> Ya
                            <input type="radio" name="relationship_q2" value="no" required> Tidak
                            @error('relationship_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="relationship_q3">Apakah Anda merasa tidak didukung atau tidak dihargai dalam hubungan Anda?</label>
                            <br>
                            <input type="radio" name="relationship_q3" value="yes" required> Ya
                            <input type="radio" name="relationship_q3" value="no" required> Tidak
                            @error('relationship_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="relationship_q4">Apakah kamu sudah menghindari menghabiskan waktu dengan pasanganmu atau berkomunikasi dengan mereka?</label>
                            <br>
                            <input type="radio" name="relationship_q4" value="yes" required> Ya
                            <input type="radio" name="relationship_q4" value="no" required> Tidak
                            @error('relationship_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="relationship_q5">Apakah Anda telah mempertanyakan apakah Anda ingin melanjutkan hubungan Anda?</label>
                            <br>
                            <input type="radio" name="relationship_q5" value="yes" required> Ya
                            <input type="radio" name="relationship_q5" value="no" required> Tidak
                            @error('relationship_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>

                        <h2>Pertanyaan untuk Masalah Pekerjaan:</h2>
                        <div class="mb-3">
                            <label for="job_q1">Apakah Anda merasa tidak biasa stres atau cemas tentang pekerjaan Anda dalam dua minggu terakhir?</label>
                            <br>
                            <input type="radio" name="job_q1" value="yes" required> Ya
                            <input type="radio" name="job_q1" value="no" required> Tidak
                            @error('job_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="job_q2">Apakah Anda mengalami kesulitan untuk berkonsentrasi atau tetap produktif di tempat kerja baru-baru ini?</label>
                            <br>
                            <input type="radio" name="job_q2" value="yes" required> Ya
                            <input type="radio" name="job_q2" value="no" required> Tidak
                            @error('job_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="job_q3">Apakah Anda merasa tidak dihargai atau dianggap remeh di pekerjaan Anda?</label>
                            <br>
                            <input type="radio" name="job_q3" value="yes" required> Ya
                            <input type="radio" name="job_q3" value="no" required> Tidak
                            @error('job_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="job_q4">Apakah Anda telah menghindari tugas atau tanggung jawab yang terkait dengan pekerjaan lebih dari biasa?</label>
                            <br>
                            <input type="radio" name="job_q4" value="yes" required> Ya
                            <input type="radio" name="job_q4" value="no" required> Tidak
                            @error('job_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="job_q5">Apakah Anda merasa kewalahan akibat tuntutan atau harapan pekerjaan?</label>
                            <br>
                            <input type="radio" name="job_q5" value="yes" required> Ya
                            <input type="radio" name="job_q5" value="no" required> Tidak
                            @error('job_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>


                        <h2>Pertanyaan untuk Kesehatan Mental:</h2>
                        <div class="mb-3">
                            <label for="mental_health_q1">Apakah Anda merasa sedih atau putus asa lebih dari biasanya dalam dua minggu terakhir??</label>
                            <br>
                            <input type="radio" name="mental_health_q1" value="yes" required> Ya
                            <input type="radio" name="mental_health_q1" value="no" required> Tidak
                            @error('mental_health_q1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="mental_health_q2">Apakah Anda telah memperhatikan perubahan dalam pola tidur Anda (misalnya, kesulitan tidur, tidur berlebihan)?</label>
                            <br>
                            <input type="radio" name="mental_health_q2" value="yes" required> Ya
                            <input type="radio" name="mental_health_q2" value="no" required> Tidak
                            @error('mental_health_q2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="mental_health_q3">Apakah Anda pernah mengalami kekurangan energi atau motivasi untuk melakukan hal-hal yang biasa Anda nikmati?</label>
                            <br>
                            <input type="radio" name="mental_health_q3" value="yes" required> Ya
                            <input type="radio" name="mental_health_q3" value="no" required> Tidak
                            @error('mental_health_q3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="mental_health_q4">Apakah Anda pernah memiliki pikiran untuk melukai diri sendiri atau bunuh diri?</label>
                            <br>
                            <input type="radio" name="mental_health_q4" value="yes" required> Ya
                            <input type="radio" name="mental_health_q4" value="no" required> Tidak
                            @error('mental_health_q4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="mental_health_q5">Apakah Anda merasa kewalahan oleh emosi Anda atau merasa sulit untuk menghadapi stres?</label>
                            <br>
                            <input type="radio" name="mental_health_q5" value="yes" required> Ya
                            <input type="radio" name="mental_health_q5" value="no" required> Tidak
                            @error('mental_health_q5')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <br>



                        <button type="submit" class="theme-btn-1 btn btn-effect-1 text-uppercase">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>

    @include('layouts.footer')
