<?php include("bbdd/conexion.php")?>
<?php 
$query = "SELECT * FROM tb_heroinas";
$result = $conexion->query($query);
?>
<?php include_once('Template/header.php') ?>
<aside>
    <article>
        <div class="text-center m-8">
            <h2 class="font-bold">Noticias</h2>
            <a target="_blank" href="https://www.elespanol.com/temas/mujeres/"> <img src="media/costaleras.webp" title="Mujeres costaleras" alt="news"></a>
            <a target="_blank"  class="font-bold underline" href="https://www.elespanol.com/temas/mujeres/">Las mujeres costaleras de Sevilla tienen su sitio en un mundo de hombres</a>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
        </div>
        <div class="text-center m-8">
            <a target="_blank" href="https://www.bbc.com/mundo/articles/cpw3l1ynqn6o"> <img src="media/9ef4d2d0-a2d6-11ee-9c99-975526122224.jpg" title="Primera mujer cirujana en gaza" alt="news"></a>
            <a target="_blank"  class="font-bold underline" href="https://www.bbc.com/mundo/articles/cpw3l1ynqn6o">Sara al Saqqa, cómo es ser la primera cirujana graduada en Gaza en medio de la guerra entre Israel y Hamás</a>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
        </div>
        <div class="text-center m-8">
            <a target="_blank" href="https://www.elmundo.es/nosotras/2019/06/03/5cf3e8ea21efa0f44f8b4592.html"> <img src="https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2019/06/02/15595004975658.jpg" title="La mujer comandante"  alt="news"></a>
            <a target="_blank"  class="font-bold underline" href="https://www.elmundo.es/nosotras/2019/06/03/5cf3e8ea21efa0f44f8b4592.html">Clara de Diego, comandante de avión: "Decir mujer pilota suena raro"</a>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
        </div>
        <div class="text-center m-8">
            <a target="_blank" href="https://www.elmundo.es/nosotras/2019/03/07/5c80fe3221efa0947d8b45c6.html"> <img src="https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2019/03/07/15519552238598.jpg" title="8-M" alt="news"></a>
            <a target="_blank"  class="font-bold underline" href="https://www.elmundo.es/nosotras/2019/03/07/5c80fe3221efa0947d8b45c6.html">Claves de la huelga feminista del 8 de marzo: qué se reclama, quién la convoca, en qué consiste...</a>
        </div>
    </article>
</aside>
<main>
    <section class="py-10 bg-w sm:py-16 lg:py-24 z-40 relative">
        <div class="container mx-auto">
            <h2 class="text-3xl font-light   text-black sm:text-4xl lg:text-5xl">
               Nuestras <span class="block w-full font-light text-transparent bg-clip-text bg-gradient-to-r from-violet-500 to-green-500 lg:inline">Heroinas
                </span>de la computacion.
            </h2>
            <p class="mb-20 text-lg text-gray-900">Aqui esta el repertorio de las seis heroinas de la computacion por la cual el mundo de la infomatica le deve mucho.
            </p>
            <?php if ($result->num_rows > 0) : ?>
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-3">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <a href="<?php echo $row['enlace'] ?>" class="shadow-2xl relative">
                <div class="h-full relative shadow-2xl shadow-violet-900 overflow-hidden group">
                    <h3 class="text-center font-bold text-violet-500"><?php echo $row['nombre'] ?></h3>
                    <div class="absolute -bottom-10 group-hover:top-0 left-0 w-full h-full group-hover:bg-violet-900 transition-all ease-in-out duration-500">
                        <div class="w-full h-full p-5 relative">
                            <div class="absolute bottom-0 group-hover:bottom-24 text-white text-left transition-all ease-in-out duration-500">
                                <h2 class="md:text-lg text-xl font-bold text-white mb-0 pb-1 opacity-0 group-hover:opacity-100"><?php echo $row['titulo']?></h2>
                                <p class="md:text-sm text-lg font-light text-white opacity-0 group-hover:opacity-100"><?php echo $row['descripcion']?></p>
                            </div>
                        </div>
                    </div>
                    <img src="media/<?php echo $row['foto'] ?>" class="w-full z-0 h-full object-fill example">
                </div>
            </a>
        <?php endwhile?>
    </div>
<?php endif?>
    </section>
</main>
<aside class="div4">
<article>
        <div class="text-center m-8">
            <h2 class="font-bold">Noticias</h2>
            <a href="https://www.bbc.com/mundo/articles/cv2zn8ld562o"> <img src="media/9068b540-8870-11ee-9ea0-6d5b911f2a92.png" title="12 Latinas elegidas en la lista 100 de bbc" alt="news"></a>
            <a class="font-bold underline" href="https://www.bbc.com/mundo/articles/cv2zn8ld562o">Quiénes son las 12 latinoamericanas elegidas en la lista 100 Mujeres de la BBC para 2024.</a>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
        </div>
        <div class="text-center m-8">
            <a href="https://www.bbc.com/mundo/noticias-50660418"> <img src="media/atril.jpg" title="Mejores peliculas para las mujeres por la bbc" alt="news"></a>
            <a class="font-bold underline" href="https://www.bbc.com/mundo/noticias-50660418" >Las 100 mejores películas dirigidas por mujeres, según la BBC.</a>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
        </div>
        <div class="text-center m-8">
            <a target="_blank" href="https://www.elmundo.es/nosotras/2019/03/08/5c8150aafdddff05738b467a.html"> <img src="https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2019/03/07/15519816711022.jpg" title="8-M en boca de los adolescentes" alt="news"></a>
            <a target="_blank" class="font-bold underline" href="https://www.bbc.com/mundo/noticias-50660418" >Adolescentes ante la nueva mujer: ¿Qué opinan del 8-M?.</a>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
        </div>
        <div class="text-center m-8">
            <a target="_blank" href="https://www.bbc.com/mundo/noticias-50660418"> <img src="https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2018/03/23/15218113088720.jpg" title="Mujeres Gamer" alt="news"></a>
            <a target="_blank" class="font-bold underline" href="https://www.bbc.com/mundo/noticias-50660418" >Denuncia a un congreso de mujeres 'gamers' por discriminación de género.</a>
        </div>
    </article>
</aside>
<?php include_once('Template/footer.php') ?>