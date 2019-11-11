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
define('DB_NAME', 'newqi');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'newqi');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'seguranca010');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql01-farm70.uni5.net');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'xfgL.+)$,EEFs+l]6NZ!K%q?Z#`kfrWW|X,Cb{!>)O3vn6r:VuskGRy7Wf9sSUzZ');
define('SECURE_AUTH_KEY',  'paXpbJ?.QQYA HN0,Nl:God10#y3q+l}n28FMs2(Dy6$E2s&Xi5fuK8(COX}]8/_');
define('LOGGED_IN_KEY',    '_Xa#V#]ZO6t0~y<94[=r#3f#L?hIW.^? I$hDaI.VT&[!=WmE`jig4c7958|v(G;');
define('NONCE_KEY',        '%o~KX]i{tw(93FLb|5NtdK4NbMFy402,qIpfZC@39D4wzst$[n`PBq!_0H&Ma23=');
define('AUTH_SALT',        'jJz5Orcw @?gY5jE>kw-Kz$Z!=w$=7)*snsTl3l&mFak@n.T4UDgyhq2c(0NtXdB');
define('SECURE_AUTH_SALT', 'S0g/Ih&4afV{hof/oi`xWGS<?=LOfuyDR:(*6yn&B5u0uWprb8hBE]:2<B8TM)SC');
define('LOGGED_IN_SALT',   'TbuaxAy)%?M2lh}L[yfrxHo5SO{m#-S13.CJ=I/FRc9orK Y-6g}|@O.wRZJ2-xa');
define('NONCE_SALT',       '{1V9V<D)vu=.$OUSJf7v8P}*0]&)9Dp{u!)<#C%:,!:M)nU6o/A^MH?vSvLEFblZ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
