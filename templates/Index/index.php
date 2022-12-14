 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex justify-content-center align-items-center">

   <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
     <h1>Lendo hoje,<br>transformando o amanhã!</h1>
     <h2>Somos uma equipe de mudanças</h2>


     <a href="<?php echo $this->Url->build(['action' => 'livros']); ?> " class="btn-get-started">Novos Livros</a>


   </div>
 </section><!-- End Hero -->

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
   <div class="container" data-aos="fade-up">

     <div class="section-title">
       <h2>Conheça</h2>
       <p>Somos a Biblioteca do CEPEF</p>
     </div>

     <div class="row">
       <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
         <!-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> -->
         <?= $this->Html->image('mentor/img/about.jpg', ['class' => 'img-fluid']); ?>
       </div>
       <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
         <h3>A leitura de um bom livro é um diálogo incessante: o livro fala e a alma responde.</h3>
         <p class="font-italic text-justify">
           A leitura é como a música da imaginação,que no faz percorrer caminho da sabedoria
         </p>

         <p>

         </p>
         <ul>
           <li><i class="icofont-check-circled"></i> Ler é dançar com a imaginação.</li>
           <li><i class="icofont-check-circled"></i> Viver sem ler é perigoso, te obriga a crer no que te dizem!</li>
           <li><i class="icofont-check-circled"></i> Desafie um amigo a ler!</li>
           <li><i class="icofont-check-circled"></i> Venha nós conhecer!</li>
         </ul>
         <!--
         <a href="about.html" class="learn-more-btn">Learn More</a>
-->
       </div>
     </div>

   </div>
 </section><!-- End About Section -->

 <!-- ======= Counts Section ======= -->
 <section id="counts" class="counts section-bg">
   <div class="container">

     <div class="row counters">

       <div class="col-lg-3 col-6 text-center">
         <span data-toggle="counter-up">12332</span>
         <p>Livros</p>
       </div>

       <div class="col-lg-3 col-6 text-center">
         <span data-toggle="counter-up">64</span>
         <p>Novos Livros</p>
       </div>

       <div class="col-lg-3 col-6 text-center">
         <span data-toggle="counter-up">423</span>
         <p>Autores</p>
       </div>

       <div class="col-lg-3 col-6 text-center">
         <span data-toggle="counter-up">145</span>
         <p>Categorias</p>
       </div>

     </div>

   </div>
 </section><!-- End Counts Section -->

 <!-- ======= Why Us Section ======= -->
 <section id="why-us" class="why-us">
   <div class="container" data-aos="fade-up">

     <div class="row">
       <div class="col-lg-4 d-flex align-items-stretch">
         <div class="content">
           <h3>É Preciso Ler Para Viver Por Completo</h3>
           <p class="text-justify">
             Os livros podem te proporcionar uma viagem para diversos mundos, através de histórias contadas em livros e através da sua imaginação isso é possível, leia.
           </p>
           <!-- btn para pagina de explicação 
           <div class="text-center">
             <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
           </div>
          -->
         </div>
       </div>
       <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
         <div class="icon-boxes d-flex flex-column justify-content-center">
           <div class="row">
             <div class="col-xl-4 d-flex align-items-stretch">
               <div class="icon-box mt-4 mt-xl-0">
                 <!--  <i class="bx bx-receipt"></i>-->
                 <h4>Para que serve a leitura?</h4>
                 <p>Ler estimula a criatividade, trabalha a imaginação, exercita a memória, contribui com o crescimento
                   do vocabulário e a melhora na escrita, além de outros benefícios.
                 </p>
               </div>
             </div>
             <div class="col-xl-4 d-flex align-items-stretch">
               <div class="icon-box mt-4 mt-xl-0">
                 <!--   <i class="bx bx-cube-alt"></i>-->
                 <h4>Como se habituar a Leitura</h4>
                 <p>Escolha os assuntos que gosta, associe a leitura com outras atividades de rotina.</p>
               </div>
             </div>
             <div class="col-xl-4 d-flex align-items-stretch">
               <div class="icon-box mt-4 mt-xl-0">
                 <!--<i class="bx bx-images"></i>-->
                 <h4>Ler faz bem para a saúde?</h4>
                 <p>Quando lemos melhoramos o funciinamento cerebral, o que ajuda a "atrasar" sintomas de doenças como demência e Alzheimer.</p>
               </div>
             </div>
           </div>
         </div><!-- End .content-->
       </div>
     </div>
   </div>
 </section><!-- End Why Us Section -->
 <br>
 <section id="features" class="features">
   <div class="container" data-aos="fade-up">
     <div class="section-title">
       <h2>Conheça</h2>
       <p>NOSSA EQUIPE</p>
     </div>

     <div class="row" data-aos="zoom-in" data-aos-delay="100" style="text-align: center;">
       <div class="col-lg-3 col-md-4">
         <div class="icon-box">
           <div class="testimonial-item" style="text-align: center;" v>
             <?= $this->Html->image('mentor/img/trainers/edineia.jpg', ['class' => 'img-fluid']); ?>
             <div class="member-content">
               <h4 style="text-align: center;">Edineia</h4>
               <span style="font-weight: bold; font-size: 15px; line-height: 0.1%;">
                 Manhã 07:00 - 13:00
               </span>
               <p style="font-size: 15px;list-style: circle;">
                 Bibliotecaria, responsavel pelo processo tecnico e atendimento aos alunos.
               </p>

             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
         <div class="icon-box">
           <div class="testimonial-item">
             <?= $this->Html->image('mentor/img/trainers/lucia.jpg', ['class' => 'img-fluid']); ?>
             <div class="member-content" style="text-align: center;">
               <h4>Lucia</h4>
               <span style="font-weight: bold; font-size: 15px; line-height: 0.1%;">Manhã 07:00 - 11:00</span><br>
               <span style="font-weight: bold; font-size: 15px; line-height: 0.1%;">Tarde 13:00 - 17:00</span>

               <p style="font-size: 15px;list-style: circle;">
                 Professora readaptada (auxiliar da Bibliotecaria). </p>
             </div>
           </div>
         </div>
       </div>
     </div>

   </div>
 </section>

 </div>
 </section><!-- End Trainers Section -->


 <!-- ======= Fotos Section ======= -->

 <section id="testimonials" class="testimonials">
   <div class="container" data-aos="fade-up">

     <div class="section-title">
       <h2>Alguns</h2>
       <p>Momentos</p>
     </div>

     <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

       <div class="testimonial-wrap text-center">
         <div class="testimonial-item">
           <?= $this->Html->image('mentor/img/galeria/1.jpg', ['class' => 'img-fluid']); ?>
         </div>
       </div>

       <div class="testimonial-wrap text-center">
         <div class="testimonial-item">
           <?= $this->Html->image('mentor/img/galeria/2.jpg', ['class' => 'img-fluid']); ?>

         </div>
       </div>

       <div class="testimonial-wrap text-center">
         <div class="testimonial-item">
           <?= $this->Html->image('mentor/img/galeria/3.jpg', ['class' => 'img-fluid']); ?>

         </div>
       </div>

       <div class="testimonial-wrap text-center">
         <div class="testimonial-item">
           <?= $this->Html->image('mentor/img/galeria/4.jpg', ['class' => 'img-fluid']); ?>

         </div>
       </div>
       <div class="testimonial-wrap text-center">
         <div class="testimonial-item">
           <?= $this->Html->image('mentor/img/galeria/5.jpg', ['class' => 'img-fluid']); ?>

         </div>
       </div>
       <div class="testimonial-wrap text-center">
         <div class="testimonial-item">
           <?= $this->Html->image('mentor/img/galeria/6.jpg', ['class' => 'img-fluid']); ?>

         </div>
       </div>

     </div>

   </div>
 </section> <!-- End Testimonials Section -->