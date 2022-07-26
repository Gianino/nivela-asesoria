<?php get_header(); ?>
<main class="main__home">
    <div class="section__hero">
        <div class="hero__inner">
            <div class="hero__title">
                Con Asesoría Universitaria en NIVEL A ahorras tiempo y dinero.
            </div>
            <button class="btn btn--primary btn--icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_27_403)">
                        <path d="M17.4167 1.83333H16.5V0.916667C16.5 0.673552 16.4034 0.440394 16.2315 0.268485C16.0596 0.0965771 15.8264 0 15.5833 0C15.3402 0 15.1071 0.0965771 14.9352 0.268485C14.7632 0.440394 14.6667 0.673552 14.6667 0.916667V1.83333H7.33333V0.916667C7.33333 0.673552 7.23676 0.440394 7.06485 0.268485C6.89294 0.0965771 6.65978 0 6.41667 0C6.17355 0 5.94039 0.0965771 5.76849 0.268485C5.59658 0.440394 5.5 0.673552 5.5 0.916667V1.83333H4.58333C3.3682 1.83479 2.20326 2.31814 1.34403 3.17737C0.484808 4.03659 0.00145554 5.20154 0 6.41667L0 17.4167C0.00145554 18.6318 0.484808 19.7967 1.34403 20.656C2.20326 21.5152 3.3682 21.9985 4.58333 22H17.4167C18.6318 21.9985 19.7967 21.5152 20.656 20.656C21.5152 19.7967 21.9985 18.6318 22 17.4167V6.41667C21.9985 5.20154 21.5152 4.03659 20.656 3.17737C19.7967 2.31814 18.6318 1.83479 17.4167 1.83333ZM1.83333 6.41667C1.83333 5.68732 2.12306 4.98785 2.63879 4.47212C3.15451 3.9564 3.85399 3.66667 4.58333 3.66667H17.4167C18.146 3.66667 18.8455 3.9564 19.3612 4.47212C19.8769 4.98785 20.1667 5.68732 20.1667 6.41667V7.33333H1.83333V6.41667ZM17.4167 20.1667H4.58333C3.85399 20.1667 3.15451 19.8769 2.63879 19.3612C2.12306 18.8455 1.83333 18.146 1.83333 17.4167V9.16667H20.1667V17.4167C20.1667 18.146 19.8769 18.8455 19.3612 19.3612C18.8455 19.8769 18.146 20.1667 17.4167 20.1667Z" fill="white"/>
                        <path d="M11 15.125C11.7594 15.125 12.375 14.5094 12.375 13.75C12.375 12.9906 11.7594 12.375 11 12.375C10.2406 12.375 9.625 12.9906 9.625 13.75C9.625 14.5094 10.2406 15.125 11 15.125Z" fill="white"/>
                        <path d="M6.4165 15.125C7.1759 15.125 7.7915 14.5094 7.7915 13.75C7.7915 12.9906 7.1759 12.375 6.4165 12.375C5.65711 12.375 5.0415 12.9906 5.0415 13.75C5.0415 14.5094 5.65711 15.125 6.4165 15.125Z" fill="white"/>
                        <path d="M15.5835 15.125C16.3429 15.125 16.9585 14.5094 16.9585 13.75C16.9585 12.9906 16.3429 12.375 15.5835 12.375C14.8241 12.375 14.2085 12.9906 14.2085 13.75C14.2085 14.5094 14.8241 15.125 15.5835 15.125Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_27_403">
                            <rect width="22" height="22" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Ver horarios
            </button>
        </div>
    </div>
    <div class="section__organizacion">
        <div class="container">
            <div class="organizacion__text">
                <p>
                    Somos una organización con 23 años de experiencia especializada en brindar Asesoría Universitaria a los alumnos de la Universidad de Lima.
                </p>
                <p>
                Nos enfocamos fundamentalmente en complementar sus estudios y potenciar su rendimiento académico para que logren los resultados propuestos.
                </p>
            </div>
            <div class="organizacion__image">
                <img src="<?php echo wp_get_attachment_image_src(12)[0]; ?>">
            </div>
        </div>
    </div>
</main>
<!-- <section>
    <div class="container">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</section> -->
<?php get_footer(); ?>
