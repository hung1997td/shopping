<?php
namespace Aws\Route53Resolver;

use Aws\AwsClient;

/**
 * This Client is used to interact with the **Amazon Route 53 Resolver** service.
 * @method \Aws\Result associateResolverEndpointIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverEndpointIpAddressAsync(array $args = [])
 * @method \Aws\Result associateResolverQueryLogConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverQueryLogConfigAsync(array $args = [])
 * @method \Aws\Result associateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverRuleAsync(array $args = [])
 * @method \Aws\Result createResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverEndpointAsync(array $args = [])
 * @method \Aws\Result createResolverQueryLogConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverQueryLogConfigAsync(array $args = [])
 * @method \Aws\Result createResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverRuleAsync(array $args = [])
 * @method \Aws\Result deleteResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverEndpointAsync(array $args = [])
 * @method \Aws\Result deleteResolverQueryLogConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverQueryLogConfigAsync(array $args = [])
 * @method \Aws\Result deleteResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverRuleAsync(array $args = [])
 * @method \Aws\Result disassociateResolverEndpointIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverEndpointIpAddressAsync(array $args = [])
 * @method \Aws\Result disassociateResolverQueryLogConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverQueryLogConfigAsync(array $args = [])
 * @method \Aws\Result disassociateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverRuleAsync(array $args = [])
 * @method \Aws\Result getResolverDnssecConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverDnssecConfigAsync(array $args = [])
 * @method \Aws\Result getResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverEndpointAsync(array $args = [])
 * @method \Aws\Result getResolverQueryLogConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverQueryLogConfigAsync(array $args = [])
 * @method \Aws\Result getResolverQueryLogConfigAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverQueryLogConfigAssociationAsync(array $args = [])
 * @method \Aws\Result getResolverQueryLogConfigPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverQueryLogConfigPolicyAsync(array $args = [])
 * @method \Aws\Result getResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRuleAsync(array $args = [])
 * @method \Aws\Result getResolverRuleAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRuleAssociationAsync(array $args = [])
 * @method \Aws\Result getResolverRulePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRulePolicyAsync(array $args = [])
 * @method \Aws\Result listResolverDnssecConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverDnssecConfigsAsync(array $args = [])
 * @method \Aws\Result listResolverEndpointIpAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverEndpointIpAddressesAsync(array $args = [])
 * @method \Aws\Result listResolverEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverEndpointsAsync(array $args = [])
 * @method \Aws\Result listResolverQueryLogConfigAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverQueryLogConfigAssociationsAsync(array $args = [])
 * @method \Aws\Result listResolverQueryLogConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverQueryLogConfigsAsync(array $args = [])
 * @method \Aws\Result listResolverRuleAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverRuleAssociationsAsync(array $args = [])
 * @method \Aws\Result listResolverRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverRulesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putResolverQueryLogConfigPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResolverQueryLogConfigPolicyAsync(array $args = [])
 * @method \Aws\Result putResolverRulePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResolverRulePolicyAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateResolverDnssecConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverDnssecConfigAsync(array $args = [])
 * @method \Aws\Result updateResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverEndpointAsync(array $args = [])
 * @method \Aws\Result updateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverRuleAsync(array $args = [])
 */
class Route53ResolverClient extends AwsClient {}