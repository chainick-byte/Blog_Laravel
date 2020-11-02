<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class EscriboBlogController extends Controller
{
    public function guardarRegistro()
    {
        $blog=new Blog;

        $blog->titulo="desalojo de minioins por la pandemia";
        $blog->articulo='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue mauris, mollis sit amet mauris at, mattis
         euismod sapien. Vivamus vel neque ultrices, vulputate ex in, volutpat est. Aliquam iaculis mi id lacinia posuere. Phasellus 
         hendrerit ligula et aliquam auctor. Aenean id leo et justo ullamcorper dictum. Maecenas vulputate aliquet commodo.
          Nulla non metus vitae felis tempus efficitur. Nunc congue dictum erat non pretium.

        Mauris tincidunt, lacus ac faucibus maximus, dolor mi fermentum ex, in placerat ante enim quis augue. Curabitur suscipit
         nec metus ut pulvinar. Etiam eget tincidunt mi. Etiam sed lacus cursus, efficitur risus at, aliquet ante. Nam et finibus enim.
          Praesent accumsan sapien erat. Vestibulum tincidunt massa sit amet felis efficitur, non egestas ligula sollicitudin. Nullam 
          laoreet vulputate pretium. Proin fermentum faucibus arcu id elementum.
        
        Ut vitae nibh nec lorem gravida ullamcorper sed sit amet metus. Orci varius natoque penatibus et magnis dis parturient montes,
         nascetur ridiculus mus. Mauris rhoncus eros in eros ultrices, a euismod erat luctus. In in justo non felis imperdiet pellentesque. Duis convallis in ligula non lobortis. Aliquam eu bibendum orci. Etiam fermentum congue mattis. Phasellus pulvinar semper augue vitae varius. Sed id nulla neque. Duis finibus, massa in sagittis semper, eros urna fermentum ipsum, in mattis mauris enim vitae augue. Sed pulvinar interdum blandit. Vivamus congue nibh a arcu lacinia fermentum. Fusce efficitur vehicula magna, id mattis felis aliquam tempus. Vestibulum ultricies turpis et iaculis fermentum.
        
        Nunc vel tincidunt diam. Morbi nec turpis vitae lectus vestibulum faucibus. Fusce quis orci ultricies, molestie nunc et, 
        scelerisque nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris pulvinar purus commodo leo porttitor, 
        in volutpat ex ultricies. Donec varius mauris id tortor volutpat tincidunt. Integer nibh neque, ultricies ut accumsan vitae, 
        pharetra et metus. Ut eget feugiat dui.
        
        Nullam pretium dui nisl, sed elementum justo aliquet sit amet. Nullam scelerisque tortor augue, nec vulputate mauris iaculis in. 
        Integer pulvinar orci at est facilisis, eu condimentum tortor aliquam. Interdum et malesuada fames ac ante ipsum primis in 
        faucibus. Ut tincidunt molestie urna. Sed sodales, ante eget sollicitudin porta, leo turpis accumsan lorem, at finibus justo metus
         sit amet est. Nullam non consequat purus. Nam blandit enim euismod diam vulputate porta. In hac habitasse platea dictumst.';
         $blog->autor='Minion desalojado';
         $blog->save();
         return 'registro guardado';
    }
    public function actualizarRegistroAutor()
    {
        $blog=Blog::find(4);
        $blog->autor='Minion desalojado varias veces';
        $blog->save();
        return 'registro acutalizado';
    }
    public function eliminarRegistro()
    {
        $blog=Blog::find(4);
        $blog->delete();
        //destroy(aqui id que queremeos elimanr varios);
        //Blog::destroy(1,2,3,4)

        return 'eliminado correctamnete.';
    }
    public function guardarRegistroForm(Request $request){

       Blog::create([
           'titulo'=>$request->titulo,
           'articulo' => $request->articulo,
           'autor'=>$request->autor,
       ]);
    
        return redirect('/');
    }
}
