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
define('DB_NAME', 'wp-erika');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'GA3vp2PQ$qGXgB=72^VIKjF99&3M*mkR%BsV+/wg2X]20Ij?IBWT@/3WBvj6V3rP');
define('SECURE_AUTH_KEY',  'k%SxD8+N%|7tAps3~BU_ft#,zk!]$xb._P?x lFHw;)6Cky)Lq`B![9IO+!2hnQ4');
define('LOGGED_IN_KEY',    'NA,9Y *CC;eEG)1]5C{zMw]Gq,2Hk7$&|T ! 7oz8}oRvL3$+5AQ>)!da$p$,Qu@');
define('NONCE_KEY',        'x8p?;tOwg#Zk=GtPy<~@fpNu-#6!)$U<Cl%J4Nj`W xzaP(9X}$D&stAxq$Q-!x]');
define('AUTH_SALT',        '!AX07|jha)8qDYs#Pi%Uwwn):Z*bLh b(80)f[K`oG$: y^RWmt#,|T-}!|{Qe2V');
define('SECURE_AUTH_SALT', ':#RVBtb[Ugo{n{hq&z&!?tP :>N&M-r=!-:(cH~eJ[p*@7Y-W7]twq`$fcA/?u|U');
define('LOGGED_IN_SALT',   '$bK8n.JU/csl#YENLha>SBK@=osy_/%Z]y9{|oScIN+$4T3i,#,Wz<C.>/h;MjV_');
define('NONCE_SALT',       'k?=hQTvRcf$4:z_kGVO$d$Q0HTgF>R]uu$eYz,GfdyY2P1,%[.rc*aOu8_E`*2R<');

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
