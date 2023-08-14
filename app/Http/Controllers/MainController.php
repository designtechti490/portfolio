<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
	public function index(){
		$pagina = 'welcome';

		$phoneNumber = [
			'ddd' => 48,
			'number' => 992092737
		];

		$city = "Porto Alegre";

		$banner = [
			'welcome' => [
				'titulo' => 'Seja Bem-Vindo!',
				'descricao' => 'Aqui você encontrará conteúdo sobre meus serviços, artigos de tecnologia, projetos de desenvolvimento de software e tudo sobre o mundo Open Source!',
				'imagem' => 'big_image_1.jpg'
			],
            'sobre' => [
                'titulo' => 'Biografia',
                'descricao' => 'Conheça mais sobre mim e siga-me nas redes sociais!',
                'imagem' => 'big_image_3.jpg'
            ],
            'projetos' => [
                'titulo' => 'Projetos',
                'descricao' => 'Visualize alguns de meus projetos de Desenvolvimento de Software, Design Gráfico e outros.',
                'imagem' => 'big_image_4.jpg'
            ],
            'blog' => [
                'titulo' => 'Blog',
                'descricao' => 'Artigos de Tecnologia sobre Desenvolvimento de Software, Design Gráfico e o Mundo Open Source.',
                'imagem' => 'big_image_5.jpg'
            ],
            'contato' => [
                'titulo' => 'Faça um orçamento!',
                'descricao' => 'Entre em contato e saiba mais sobre valores',
                'imagem' => 'big_image_6.jpg'
            ]
		];

		// Verifica se a página atual existe no array $banner
		if (array_key_exists($pagina, $banner)) {
			$dadosBanner = $banner[$pagina];

			$path = 'midias/banner';
			$imagens = File::files($path);

			$dadosBanner['imagem'] = "$path/" . $dadosBanner['imagem'];

			return view($pagina, compact('dadosBanner', 'phoneNumber', 'city'));

			}else {
			// Página não encontrada, pode retornar uma mensagem de erro ou redirecionar para outra página
			echo $pagina;
			abort(404, 'Página não encontrada');

		}
	}

	public function sobre(){
		$pagina = 'sobre';

		$phoneNumber = [
			'ddd' => 48,
			'number' => 992092737
		];

		$city = "Porto Alegre";

		$banner = [
			'welcome' => [
				'titulo' => 'Seja Bem-Vindo!',
				'descricao' => 'Aqui você encontrará conteúdo sobre meus serviços, artigos de tecnologia, projetos de desenvolvimento de software e tudo sobre o mundo Open Source!',
				'imagem' => 'big_image_1.jpg'
			],
            'sobre' => [
                'titulo' => 'Biografia',
                'descricao' => 'Conheça mais sobre mim e siga-me nas redes sociais!',
                'imagem' => 'big_image_3.jpg'
            ],
            'projetos' => [
                'titulo' => 'Projetos',
                'descricao' => 'Visualize alguns de meus projetos de Desenvolvimento de Software, Design Gráfico e outros.',
                'imagem' => 'big_image_4.jpg'
            ],
            'blog' => [
                'titulo' => 'Blog',
                'descricao' => 'Artigos de Tecnologia sobre Desenvolvimento de Software, Design Gráfico e o Mundo Open Source.',
                'imagem' => 'big_image_5.jpg'
            ],
            'contato' => [
                'titulo' => 'Faça um orçamento!',
                'descricao' => 'Entre em contato e saiba mais sobre valores',
                'imagem' => 'big_image_6.jpg'
            ]
		];

		// Verifica se a página atual existe no array $banner
		if (array_key_exists($pagina, $banner)) {
			$dadosBanner = $banner[$pagina];

			$path = 'midias/banner';
			$imagens = File::files($path);

			$dadosBanner['imagem'] = "$path/" . $dadosBanner['imagem'];

			return view($pagina, compact('dadosBanner', 'phoneNumber', 'city'));

			}else {
			// Página não encontrada, pode retornar uma mensagem de erro ou redirecionar para outra página
			echo $pagina;
			abort(404, 'Página não encontrada');

		}
	}

	public function blog(){
		$pagina = 'blog';

		$phoneNumber = [
			'ddd' => 48,
			'number' => 992092737
		];

		$city = "Porto Alegre";

		$banner = [
			'welcome' => [
				'titulo' => 'Seja Bem-Vindo!',
				'descricao' => 'Aqui você encontrará conteúdo sobre meus serviços, artigos de tecnologia, projetos de desenvolvimento de software e tudo sobre o mundo Open Source!',
				'imagem' => 'big_image_1.jpg'
			],
            'sobre' => [
                'titulo' => 'Biografia',
                'descricao' => 'Conheça mais sobre mim e siga-me nas redes sociais!',
                'imagem' => 'big_image_3.jpg'
            ],
            'projetos' => [
                'titulo' => 'Projetos',
                'descricao' => 'Visualize alguns de meus projetos de Desenvolvimento de Software, Design Gráfico e outros.',
                'imagem' => 'big_image_4.jpg'
            ],
            'blog' => [
                'titulo' => 'Blog',
                'descricao' => 'Artigos de Tecnologia sobre Desenvolvimento de Software, Design Gráfico e o Mundo Open Source.',
                'imagem' => 'big_image_5.jpg'
            ],
            'contato' => [
                'titulo' => 'Faça um orçamento!',
                'descricao' => 'Entre em contato e saiba mais sobre valores',
                'imagem' => 'big_image_6.jpg'
            ]
		];

		// Verifica se a página atual existe no array $banner
		if (array_key_exists($pagina, $banner)) {
			$dadosBanner = $banner[$pagina];

			$path = 'midias/banner';
			$imagens = File::files($path);

			$dadosBanner['imagem'] = "$path/" . $dadosBanner['imagem'];

			return view($pagina, compact('dadosBanner', 'phoneNumber', 'city'));

			}else {
			// Página não encontrada, pode retornar uma mensagem de erro ou redirecionar para outra página
			echo $pagina;
			abort(404, 'Página não encontrada');

		}
	}

	public function projetos(){
		$pagina = 'projetos';

		$phoneNumber = [
			'ddd' => 48,
			'number' => 992092737
		];

		$city = "Porto Alegre";

		$banner = [
			'welcome' => [
				'titulo' => 'Seja Bem-Vindo!',
				'descricao' => 'Aqui você encontrará conteúdo sobre meus serviços, artigos de tecnologia, projetos de desenvolvimento de software e tudo sobre o mundo Open Source!',
				'imagem' => 'big_image_1.jpg'
			],
            'sobre' => [
                'titulo' => 'Biografia',
                'descricao' => 'Conheça mais sobre mim e siga-me nas redes sociais!',
                'imagem' => 'big_image_3.jpg'
            ],
            'projetos' => [
                'titulo' => 'Projetos',
                'descricao' => 'Visualize alguns de meus projetos de Desenvolvimento de Software, Design Gráfico e outros.',
                'imagem' => 'big_image_4.jpg'
            ],
            'blog' => [
                'titulo' => 'Blog',
                'descricao' => 'Artigos de Tecnologia sobre Desenvolvimento de Software, Design Gráfico e o Mundo Open Source.',
                'imagem' => 'big_image_5.jpg'
            ],
            'contato' => [
                'titulo' => 'Faça um orçamento!',
                'descricao' => 'Entre em contato e saiba mais sobre valores',
                'imagem' => 'big_image_6.jpg'
            ]
		];

		// Verifica se a página atual existe no array $banner
		if (array_key_exists($pagina, $banner)) {
			$dadosBanner = $banner[$pagina];

			$path = 'midias/banner';
			$imagens = File::files($path);

			$dadosBanner['imagem'] = "$path/" . $dadosBanner['imagem'];

			return view($pagina, compact('dadosBanner', 'phoneNumber', 'city'));

			}else {
			// Página não encontrada, pode retornar uma mensagem de erro ou redirecionar para outra página
			echo $pagina;
			abort(404, 'Página não encontrada');

		}
	}

	public function contato(){
		$pagina = 'contato';

		$phoneNumber = [
			'ddd' => 48,
			'number' => 992092737
		];

		$city = "Porto Alegre";

		$banner = [
			'welcome' => [
				'titulo' => 'Seja Bem-Vindo!',
				'descricao' => 'Aqui você encontrará conteúdo sobre meus serviços, artigos de tecnologia, projetos de desenvolvimento de software e tudo sobre o mundo Open Source!',
				'imagem' => 'big_image_1.jpg'
			],
            'sobre' => [
                'titulo' => 'Biografia',
                'descricao' => 'Conheça mais sobre mim e siga-me nas redes sociais!',
                'imagem' => 'big_image_3.jpg'
            ],
            'projetos' => [
                'titulo' => 'Projetos',
                'descricao' => 'Visualize alguns de meus projetos de Desenvolvimento de Software, Design Gráfico e outros.',
                'imagem' => 'big_image_4.jpg'
            ],
            'blog' => [
                'titulo' => 'Blog',
                'descricao' => 'Artigos de Tecnologia sobre Desenvolvimento de Software, Design Gráfico e o Mundo Open Source.',
                'imagem' => 'big_image_5.jpg'
            ],
            'contato' => [
                'titulo' => 'Faça um orçamento!',
                'descricao' => 'Entre em contato e saiba mais sobre valores',
                'imagem' => 'big_image_6.jpg'
            ]
		];

		// Verifica se a página atual existe no array $banner
		if (array_key_exists($pagina, $banner)) {
			$dadosBanner = $banner[$pagina];

			$path = 'midias/banner';
			$imagens = File::files($path);

			$dadosBanner['imagem'] = "$path/" . $dadosBanner['imagem'];

			return view($pagina, compact('dadosBanner', 'phoneNumber', 'city'));

			}else {
			// Página não encontrada, pode retornar uma mensagem de erro ou redirecionar para outra página
			echo $pagina;
			abort(404, 'Página não encontrada');

		}
	}


}
