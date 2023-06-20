<label for="titulo">titulo</label>    
    <input type="text" name="titulo" placeholder="titulo" id="titulo" value="<?= $pelicula['titulo'] ?>">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id=""><?= $pelicula['descripcion'] ?></textarea>    
    <!-- <input type="text" name="descripcion" placeholder="descripcion" id="descripcion"> -->
    <button type="submit"><?= $op ?></button>