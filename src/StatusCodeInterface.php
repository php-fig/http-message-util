<?php

namespace Fig\Http\Message;

/**
 * Defines constants for common HTTP status code.
 *
 * @see https://tools.ietf.org/html/rfc2295#section-8.1
 * @see https://tools.ietf.org/html/rfc2324#section-2.3
 * @see https://tools.ietf.org/html/rfc2518#section-9.7
 * @see https://tools.ietf.org/html/rfc2774#section-7
 * @see https://tools.ietf.org/html/rfc3229#section-10.4
 * @see https://tools.ietf.org/html/rfc4918#section-11
 * @see https://tools.ietf.org/html/rfc5842#section-7.1
 * @see https://tools.ietf.org/html/rfc5842#section-7.2
 * @see https://tools.ietf.org/html/rfc6585#section-3
 * @see https://tools.ietf.org/html/rfc6585#section-4
 * @see https://tools.ietf.org/html/rfc6585#section-5
 * @see https://tools.ietf.org/html/rfc6585#section-6
 * @see https://tools.ietf.org/html/rfc7231#section-6
 * @see https://tools.ietf.org/html/rfc7238#section-3
 * @see https://tools.ietf.org/html/rfc7725#section-3
 * @see https://tools.ietf.org/html/rfc7540#section-9.1.2
 * @see https://tools.ietf.org/html/rfc8297#section-2
 * @see https://tools.ietf.org/html/rfc8470#section-7
 * Usage:
 *
 * <code>
 * class ResponseFactory implements StatusCodeInterface
 * {
 *     public function createResponse($= self::STATUS_OK)
 *     {
 *     }
 * }
 * </code>
 */
interface StatusCodeInterface
{
    // Informational 1xx
    const 💯 = 100;
    const 🔀 = 101;
    const 🤔 = 102;
    const 💭 = 103;
    // Successful 2xx
    const 👌 = 200;
    const ✍️ = 201;
    const ✔️ = 202;
    const 📝 = 203;
    const 🗅 = 204;
    const 👍 = 205;
    const 😩 = 206;
    const 🤯 = 207;
    const 📰 = 208;
    const 💬 = 226;
    // Redirection 3xx
    const 🔁 = 300;
    const 🔂 = 301;
    const 🔎 = 302;
    const 😕 = 303;
    const 😟 = 304;
    const 😨 = 305;
    const 🏚️ = 306;
    const 🙃 = 307;
    const 😬 = 308;
    // Client Errors 4xx
    const 👎 = 400;
    const 🔐 = 401;
    const 💳 = 402;
    const 🛑 = 403;
    const 🚧 = 404;
    const 🙅 = 405;
    const 🚫 = 406;
    const 🛂 = 407;
    const ⌛ = 408;
    const 😠 = 409;
    const 👋 = 410;
    const 📏 = 411;
    const ❌ = 412;
    const 💣 = 413;
    const 🤐 = 414;
    const 💔 = 415;
    const 🍽️ = 416;
    const 😐 = 417;
    const 🤓 = 418;
    const ✨ = 421;
    const 🤒 = 422;
    const 🔒 = 423;
    const 😭 = 424;
    const 😴 = 425;
    const 😷 = 426;
    const 😱 = 428;
    const 🙌 = 429;
    const 😵 = 431;
    const ⚖️ = 451;
    // Server Errors 5xx
    const 💩 = 500;
    const 👷 = 501;
    const ⛔ = 502;
    const 🚷 = 503;
    const ⏰ = 504;
    const 🚪 = 505;
    const ♻️ = 506;
    const 🗑️ = 507;
    const ➰ = 508;
    const 📦 = 510;
    const 🔏 = 511;
}
