<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cloud-provider-integration/cloud-virtualized-app-registration.proto

namespace GPBMetadata\CloudProviderIntegration;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Commons\Message;

class CloudVirtualizedAppRegistration
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a81060a43636c6f75642d70726f76696465722d696e746567726174696f6e2f636c6f75642d7669727475616c697a65642d6170702d726567697374726174696f6e2e70726f746f121d61677269726f757465722e636c6f75642e726567697374726174696f6e22b7010a114f6e626f617264696e675265717565737412690a136f6e626f617264696e675f726571756573747318012003280b324c2e61677269726f757465722e636c6f75642e726567697374726174696f6e2e4f6e626f617264696e67526571756573742e456e64706f696e74526567697374726174696f6e44657461696c731a370a1b456e64706f696e74526567697374726174696f6e44657461696c73120a0a026964180120012809120c0a046e616d6518022001280922af030a124f6e626f617264696e67526573706f6e7365126a0a136f6e626f61726465645f656e64706f696e747318012003280b324d2e61677269726f757465722e636c6f75642e726567697374726174696f6e2e4f6e626f617264696e67526573706f6e73652e456e64706f696e74526567697374726174696f6e44657461696c73124c0a086661696c7572657318022003280b323a2e61677269726f757465722e636c6f75642e726567697374726174696f6e2e4f6e626f617264696e67526573706f6e73652e4661696c757265731a99010a1b456e64706f696e74526567697374726174696f6e44657461696c73120a0a026964180120012809121b0a136465766963655f616c7465726e6174655f6964180220012809121b0a1373656e736f725f616c7465726e6174655f6964180320012809121f0a176361706162696c6974795f616c7465726e6174655f696418042001280912130a0b656e64706f696e745f69641805200128091a430a084661696c75726573120a0a026964180120012809122b0a06726561736f6e18022001280b321b2e61677269726f757465722e636f6d6d6f6e732e4d65737361676522270a124f6666626f617264696e675265717565737412110a09656e64706f696e7473180120032809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
