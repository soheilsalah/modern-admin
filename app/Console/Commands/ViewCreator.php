<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ViewCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {filename} {--path=} {--role=} {--controller=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create a simple blade file inside resourses path';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $view_file = $this->argument('filename').'.blade.php';

        if($this->option('path') == null && $this->option('role') == null){

            $path = $this->getPath();

        }elseif($this->option('path') != null && $this->option('role') == null){

            $path = $this->getPath($this->option('path'));

        }else{

            $path = $this->getPath(strtolower($this->option('role')), $this->option('path'));
        }

        if($this->option('controller') != null){

            $controller_name = ucfirst(strtolower(basename($this->option('controller')))).'Controller';

            $controller_filename = $controller_name.'.php';

            if($this->option('role') != null){

                $role = ucfirst(strtolower($this->option('role')));

                $namspace = "namespace App\Http\Controllers\\".$role.'\\'.dirname($this->option('controller')).';';

                $view_controller = $this->option('path') == null ? strtolower($this->option('role')).'.'.str_replace('/', '.', $this->argument('filename')) : str_replace('/', '.', $this->option('path')).'.'.$$this->argument('filename');

                $controller_path = controller_path(dirname($role.'/'.$this->option('controller')));
                $controller_filename_path = $controller_path.'/'.$controller_filename;

            }else{

                $namspace = "namespace App\Http\Controllers\\".dirname($this->option('controller')).";";

                $view_controller = $this->option('path') == null ? str_replace('/', '.', $this->argument('filename')) : str_replace('/', '.', $this->option('path')).'.'.$$this->argument('filename');
                
                $controller_path = controller_path(dirname($this->option('controller')));
                $controller_filename_path = $controller_path.'/'.$controller_filename;
            }

            mkdirAndCreateFile($controller_path, $controller_filename_path, $this->controllerContent($namspace, $controller_name, $view_controller));
        }

        $blade_file_path = $path.DIRECTORY_SEPARATOR.$view_file;

        mkdirAndCreateFile($path, $blade_file_path, $this->bladeContent($this->option('role'), $this->argument('filename')));
    }

    private function getPath($role = null, $path = null)
    {
        if($role != null){

            return $path == null ? base_path('resources/views/'.$role) : base_path('resources/views/'.$role.'/'.$path);
        }else{

            return $path == null ? base_path('resources/views') : base_path('resources/views/'.$path);
        }
    }

    private function bladeContent($role = null, $title, $controller = false)
    {
        $layouts = $role == null ? 'layouts.app' : $role.'.layouts.app';

        $active = str_replace('/', '.', $title);

        $blade_title = ucfirst(basename($title));

        return <<<HTML
        @extends('{$layouts}',[
            'title' => '{$blade_title}',
            'active' => '{$active}',
            'breadcrumb' => [
                'title' => '{$title}',
                'map' => [],
            ]
        ])

        @section('styles')
        @endsection

        @section('content')
        <!-- Description -->
        <section id="description" class="card">
            <div class="card-header">
                <h4 class="card-title">{$blade_title}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <!-- Write something good -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ Description -->
        @endsection

        @section('scripts')
        @endsection
        HTML;
    }

    private function controllerContent($namespace, $controller_name, $view_controller)
    {
        return <<<EOT
        <?php

        {$namespace}

        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;

        class {$controller_name} extends Controller
        {
            public function index()
            {
                \$hello = "Hello World";

                return view('{$view_controller}', compact('hello'));
            }
        }
        EOT;
    }
}
