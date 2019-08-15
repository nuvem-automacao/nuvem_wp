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
define( 'DB_NAME', 'nuvem_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'q2YLUQyVI_lx,4Y-QXP@%12Gj(d2A45ceu8N@{HMM-iXW5A1}X%$6=0[14j4Ysy7' );
define( 'SECURE_AUTH_KEY',  'OKa`(Y& #sb^zC@2_uJ|+X?UQh4QHf)bzywK`Y5>Z_Ee5u`ZWS $Z&F)eo;+07lT' );
define( 'LOGGED_IN_KEY',    'H!Rn[|H`edN-QSD[{I(!=98KZZ_vH)e#6tfmFHsM{^bLM$YI^)%wT4?Sx:9# T[J' );
define( 'NONCE_KEY',        '}bMBzk$yRbbM|3!7E8s_TCg&fYtDe(%OWUTU)O~v}sR>{9;_k$OBy!_V7e258ejZ' );
define( 'AUTH_SALT',        'DOIlC!]uS;LER5ao=_vcNdo[0UDPo##<8&/2,o]EbueF-tTSG_9,;vSECO~:e6%x' );
define( 'SECURE_AUTH_SALT', 'Ug6 $puj{M:=vd}D]BMojq/gjRh>d>.A9%&<wcg-}y^`F*j*Ew1VN3LxfUI/YW2;' );
define( 'LOGGED_IN_SALT',   'Zy/{VOY^<)$D|6ssBIcUJCA8M:El?bde:Bu2>o%?)K2KFOpe6B)$g+h;o}t-DUQV' );
define( 'NONCE_SALT',       'n;cN|xF*CMV|^(jd+wlG;zCI{?uS}a)%`GJvrzv{K2IK,6<+zp}s5NdXb`-T/`#S' );

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
