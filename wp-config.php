<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bminternational' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xn-Jx-zI[% 0qVnyk?_ow8O2MyYdg^K>KK KoHxpX Hlbr[c:l;Ni6TK]mSAOv@g' );
define( 'SECURE_AUTH_KEY',  '_RGS<i9:U L0MnSaA%cehbFdN`Y3czUjT)=*L/|44;>12r+)CCaI|so^sHz(P4/@' );
define( 'LOGGED_IN_KEY',    '_2PBD|yjI9$}3})q@ri(Yi~U>523y8jf*g>l*=$ J(`ToF(p*S9hY|W9}BZ30?v<' );
define( 'NONCE_KEY',        'Eo_D3D[3O?R:#= @=X]!up,rqM 8t)lmlp[KTbS(e>e}sZ_<SIcRMz[.C0Q6m^w^' );
define( 'AUTH_SALT',        'k]yHXU%cD$%&gfPN4Yro[j$ta[tV[q>WsL+pa?k7N8:@wopNT.V|`)>Bx4 <6iX5' );
define( 'SECURE_AUTH_SALT', 'J^_E~G5:{j{M)/;@d@gES0Xq2x$q`,s#{Q,<LNEAmWEAwM9Y&E`_3J~a:S=v.F+^' );
define( 'LOGGED_IN_SALT',   'Q(-MI;43?FfzNMvYXKzr{&iY3c+L3I{o<Bi&1t&T:cBj.9}Dn%HK<~nN,:__f45n' );
define( 'NONCE_SALT',       'jtM^7{(!aNLyRuQ=LfpSqtQ>31R<[ snCWVYymh[SC/ A4tw^?z6@DmI|| q{_zv' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
