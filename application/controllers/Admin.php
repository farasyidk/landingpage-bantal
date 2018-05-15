<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('bantal_model');
      $this->load->helper('url');
       if($this->session->userdata('status') != "login"){
         redirect(base_url("login"));
           $this->session->set_userdata('username','1');
       }

  }


  public function index($halaman='index'){
    $data['graf'] = $this->bantal_model->get_counter('data');
    $data['about']=$this->bantal_model->get_bantal('about');
    $data['pengerjaan']=$this->bantal_model->get_bantal('pengerjaan');
    $data['layanan']=$this->bantal_model->get_bantal('layanan');
    $data['feedback']=$this->bantal_model->get_bantal('feedback');
    $data['barang']=$this->bantal_model->get_bantal('barang');
    $data['kualitas']=$this->bantal_model->get_bantal('kualitas');
    $data['harga']=$this->bantal_model->get_bantal('harga');
    $data['depan']=$this->bantal_model->get_frontend();
    $data['testimoni']=$this->bantal_model->get_testimoni();
    $data['batik']=$this->bantal_model->get_bantal('produk');


    $this->load->view('templates/header');
    $this->load->view('admin/'.$halaman,$data);
    $this->load->view('templates/footer');
  }

   public function create(){
       $this->load->helper('form');
     $this->load->library('form_validation');


      $this->form_validation->set_rules('nama','nama','required');
      $this->form_validation->set_rules('harga','harga','required');

      $this->form_validation->set_rules('deskripsi','deskripsi','required');


        $nama = 'file_'.time();

       $config['upload_path']	 = './assets/img/uploads/';

       $config['allowed_types'] = 'gif|jpg|png';
       $config['max_size']		 = '5000';
       $config['max_width']	 = '5000';
       $config['max_height']	 = '5000';
       $config['file_name']	 = $nama;

     $this->load->library('upload', $config);


      if ($this->form_validation->run() == TRUE && $this->upload->do_upload('foto'))
       {

         $gambar = $this->upload->data();

         $data = array(
         'nama'=> $this->input->post('nama',TRUE),
         'harga'=> $this->input->post('harga',TRUE),
         'gambar'		=> $gambar['file_name'],
         'deskripsi'=> $this->input->post('deskripsi',TRUE)

       );

       $this->bantal_model->insert($data);
       echo "
       <script>
         alert('data berhasil ditambahkan');
         window.location.href = '" . base_url() . "admin/table';
       </script>
       ";

       }  else   {
         $data['foto'] = '';
         if (! $this->upload->do_upload('foto'))
         {
            $error = array('error' => $this->upload->display_errors());

                         $this->load->view('admin/post', $error);
         }


   }
  }

  public function create1(){
      $this->load->helper('form');


       $nama = 'file_'.time();

      $config['upload_path']	 = './assets/img/uploads/';

      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']		 = '5000';
      $config['max_width']	 = '5000';
      $config['max_height']	 = '5000';
      $config['file_name']	 = $nama;

    $this->load->library('upload', $config);


     if ($this->upload->do_upload('foto'))
      {

        $gambar = $this->upload->data();

        $data = array(
        'gambar'		=> $gambar['file_name'],
      );

      $this->bantal_model->insert1($data);
      echo "
      <script>
        alert('data berhasil ditambahkan');
        window.location.href = '" . base_url() . "admin/datatest';
      </script>
      ";

      }  else   {
        $data['foto'] = '';
        if (! $this->upload->do_upload('foto'))
        {
           $error = array('error' => $this->upload->display_errors());
  $this->load->view('templates/header');
                        $this->load->view('admin/testimoni', $error);
        }


  }
 }





  public function update($id){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('harga','harga','required');
    $this->form_validation->set_rules('deskripsi','deskripsi','required');

    $nama = 'file_'.time();
    $config['upload_path']	 = './assets/img/uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']		 = '5000';
    $config['max_width']	 = '5000';
    $config['max_height']	 = '5000';
    $config['file_name']	 = $nama;

    $this->load->library('upload', $config);

    if ($this->form_validation->run()=== FALSE) {
        $data['batik'] = $this->bantal_model->get_bantal_id($id,'produk');
        $this->load->view('templates/header');
        $this->load->view('admin/update',$data);
        $this->load->view('templates/footer');
    } else {
        if ($this->upload->do_upload('foto')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama'=> $this->input->post('nama',TRUE),
                'harga'=> $this->input->post('harga',TRUE),
                'gambar'		=> $gambar['file_name'],
                'deskripsi'=> $this->input->post('deskripsi',TRUE)
            );
        } else {
            $data = array(
                'nama'=> $this->input->post('nama',TRUE),
                'harga'=> $this->input->post('harga',TRUE),
                'deskripsi'=> $this->input->post('deskripsi',TRUE)
            );
       }
        if ($this->bantal_model->update($id, $data,'produk') === TRUE ) {
             // $data['id'] = ;
             echo "
             <script>
               alert('data berhasil diubah');
               window.location.href = '" . base_url() . "admin/update/$id';
             </script>
             ";

        }else {
            echo "salah";
        }
    }
 }

 public function updateabout($id){
   $this->load->helper('form');
   $this->load->library('form_validation');
   $this->form_validation->set_rules('deskripsi','deskripsi','required');



   if ($this->form_validation->run()=== FALSE) {
       $data['about'] = $this->bantal_model->get_bantal_id($id,'about');
       $this->load->view('templates/header');
       $this->load->view('admin/updateabout',$data);
       $this->load->view('templates/footer');
   } else {
     $data = array(

         'deskripsi'=> $this->input->post('deskripsi',TRUE)
          );

       if ($this->bantal_model->update($id, $data,'about') === TRUE ) {
            // $data['id'] = ;
            echo "
            <script>
              alert('data berhasil diubah');
              window.location.href = '" . base_url() . "admin/about';
            </script>
            ";

      }else {
          echo "salah";
      }

       }
   }


   public function updateharga($id){
     $this->load->helper('form');
     $this->load->library('form_validation');
     $this->form_validation->set_rules('judul','judul','required');
     $this->form_validation->set_rules('deskripsi','deskripsi','required');



     if ($this->form_validation->run()=== FALSE) {
         $data['harga'] = $this->bantal_model->get_bantal_id($id,'harga');
         $this->load->view('templates/header');
         $this->load->view('admin/updateharga',$data);
         $this->load->view('templates/footer');
     } else {
       $data = array(
           'judul'=> $this->input->post('judul',TRUE),
           'deskripsi'=> $this->input->post('deskripsi',TRUE)
            );

         if ($this->bantal_model->update($id, $data,'harga') === TRUE ) {
              // $data['id'] = ;
              echo "
              <script>
                alert('data berhasil diubah');
                window.location.href = '" . base_url() . "admin/harga';
              </script>
              ";

        }else {
            echo "salah";
        }

         }
     }



     public function updatekualitas($id){
       $this->load->helper('form');
       $this->load->library('form_validation');
       $this->form_validation->set_rules('judul','judul','required');
       $this->form_validation->set_rules('deskripsi','deskripsi','required');



       if ($this->form_validation->run()=== FALSE) {
           $data['kualitas'] = $this->bantal_model->get_bantal_id($id,'kualitas');
           $this->load->view('templates/header');
           $this->load->view('admin/updatekualitas',$data);
           $this->load->view('templates/footer');
       } else {
         $data = array(
             'judul'=> $this->input->post('judul',TRUE),
             'deskripsi'=> $this->input->post('deskripsi',TRUE)
              );

           if ($this->bantal_model->update($id, $data,'kualitas') === TRUE ) {
                // $data['id'] = ;
                echo "
                <script>
                  alert('data berhasil diubah');
                  window.location.href = '" . base_url() . "admin/kualitas';
                </script>
                ";

          }else {
              echo "salah";
          }

           }
       }



       public function updatebarang($id){
         $this->load->helper('form');
         $this->load->library('form_validation');
         $this->form_validation->set_rules('judul','judul','required');
         $this->form_validation->set_rules('deskripsi','deskripsi','required');



         if ($this->form_validation->run()=== FALSE) {
             $data['barang'] = $this->bantal_model->get_bantal_id($id,'barang');
             $this->load->view('templates/header');
             $this->load->view('admin/updatebarang',$data);
             $this->load->view('templates/footer');
         } else {
           $data = array(
               'judul'=> $this->input->post('judul',TRUE),
               'deskripsi'=> $this->input->post('deskripsi',TRUE)
                );

             if ($this->bantal_model->update($id, $data,'barang') === TRUE ) {
                  // $data['id'] = ;
                  echo "
                  <script>
                    alert('data berhasil diubah');
                    window.location.href = '" . base_url() . "admin/barang';
                  </script>
                  ";

            }else {
                echo "salah";
            }

             }
         }

         public function updatepengerjaan($id){
           $this->load->helper('form');
           $this->load->library('form_validation');
           $this->form_validation->set_rules('judul','judul','required');
           $this->form_validation->set_rules('deskripsi','deskripsi','required');



           if ($this->form_validation->run()=== FALSE) {
               $data['pengerjaan'] = $this->bantal_model->get_bantal_id($id,'pengerjaan');
               $this->load->view('templates/header');
               $this->load->view('admin/updatepengerjaan',$data);
               $this->load->view('templates/footer');
           } else {
             $data = array(
                 'judul'=> $this->input->post('judul',TRUE),
                 'deskripsi'=> $this->input->post('deskripsi',TRUE)
                  );

               if ($this->bantal_model->update($id, $data,'pengerjaan') === TRUE ) {
                    // $data['id'] = ;
                    echo "
                    <script>
                      alert('data berhasil diubah');
                      window.location.href = '" . base_url() . "admin/pengerjaan';
                    </script>
                    ";

              }else {
                  echo "salah";
              }

               }
           }


           public function updatelayanan($id){
             $this->load->helper('form');
             $this->load->library('form_validation');
             $this->form_validation->set_rules('judul','judul','required');
             $this->form_validation->set_rules('deskripsi','deskripsi','required');



             if ($this->form_validation->run()=== FALSE) {
                 $data['layanan'] = $this->bantal_model->get_bantal_id($id,'layanan');
                 $this->load->view('templates/header');
                 $this->load->view('admin/updatelayanan',$data);
                 $this->load->view('templates/footer');
             } else {
               $data = array(
                   'judul'=> $this->input->post('judul',TRUE),
                   'deskripsi'=> $this->input->post('deskripsi',TRUE)
                    );

                 if ($this->bantal_model->update($id, $data,'layanan') === TRUE ) {
                      // $data['id'] = ;
                      echo "
                      <script>
                        alert('data berhasil diubah');
                        window.location.href = '" . base_url() . "admin/layanan';
                      </script>
                      ";

                }else {
                    echo "salah";
                }

                 }
             }

                        public function updatefeedback($id){
                          $this->load->helper('form');
                          $this->load->library('form_validation');
                          $this->form_validation->set_rules('judul','judul','required');
                          $this->form_validation->set_rules('deskripsi','deskripsi','required');



                          if ($this->form_validation->run()=== FALSE) {
                              $data['feedback'] = $this->bantal_model->get_bantal_id($id,'feedback');
                              $this->load->view('templates/header');
                              $this->load->view('admin/updatefeedback',$data);
                              $this->load->view('templates/footer');
                          } else {
                            $data = array(
                                'judul'=> $this->input->post('judul',TRUE),
                                'deskripsi'=> $this->input->post('deskripsi',TRUE)
                                 );

                              if ($this->bantal_model->update($id, $data,'feedback') === TRUE ) {
                                   // $data['id'] = ;
                                   echo "
                                   <script>
                                     alert('data berhasil diubah');
                                     window.location.href = '" . base_url() . "admin/feedback';
                                   </script>
                                   ";

                             }else {
                                 echo "salah";
                             }

                              }
                          }


   public function ubah($id){
     $this->load->helper('form');
     $this->load->library('form_validation');


     $this->form_validation->set_rules('deskripsi','deskripsi','required');

     $nama = 'file_'.time();
     $config['upload_path']	 = './assets/img/uploads/';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size']		 = '5000';
     $config['max_width']	 = '5000';
     $config['max_height']	 = '5000';
     $config['file_name']	 = $nama;

     $this->load->library('upload', $config);

     if ($this->form_validation->run()=== FALSE) {
         $data['testimoni'] = $this->bantal_model->get_bantal_id($id,'testimoni');
         $this->load->view('templates/header');
         $this->load->view('admin/update1',$data);
         $this->load->view('templates/footer');
     } else {
         if ($this->upload->do_upload('foto')) {
             $gambar = $this->upload->data();
             $data = array(

                 'gambar'		=> $gambar['file_name'],
                 'deskripsi'=> $this->input->post('deskripsi',TRUE)
             );
         } else {
             $data = array(

                 'deskripsi'=> $this->input->post('deskripsi',TRUE)
             );
        }
         if ($this->bantal_model->update($id, $data,'testimoni') === TRUE ) {
              // $data['id'] = ;
              echo "
              <script>
                alert('data berhasil diubah');
                window.location.href = '" . base_url() . "admin/datatest';
              </script>
              ";

         }else {
             echo "salah";
         }
     }
  }




 public function delete($id){
   $this->bantal_model->delete_data($id);
   redirect('admin/table');
 }
 public function delete1($id){
   $this->bantal_model->delete_data1($id);
   redirect('admin/kontak');
 }
 public function delete2($id){
   $this->bantal_model->delete_data2($id);
   redirect('admin/datatest');
 }






}
