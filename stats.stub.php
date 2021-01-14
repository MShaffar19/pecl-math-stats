<?php
/** @generate-function-entries */

function stats_cdf_t(float $par1, float $par2, int $which): float|false {}
function stats_cdf_normal(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_gamma(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_chisquare(float $par1, float $par2, int $which): float|false {}
function stats_cdf_beta(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_binomial(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_noncentral_chisquare(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_f(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_noncentral_f(float $par1, float $par2, float $par3, float $par4, int $which): float|false {}
function stats_cdf_noncentral_t(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_negative_binomial(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_poisson(float $par1, float $par2, int $which): float|false {}
function stats_cdf_laplace(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_cauchy(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_logistic(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_weibull(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_uniform(float $par1, float $par2, float $par3, int $which): float|false {}
function stats_cdf_exponential(float $par1, float $par2, int $which): float|false {}
function stats_rand_setall(int $iseed1, int $iseed2): bool {}
function stats_rand_getsd(): array {}
function stats_rand_gen_iuniform(int $low, int $high): int|false {}
function stats_rand_gen_funiform(float $low, float $high): float|false {}
function stats_rand_ignlgi(): int {}
function stats_rand_ranf(): float|false {}
function stats_rand_gen_beta(float $a, float $b): float|false {}
function stats_rand_gen_chisquare(float $df): float|false {}
function stats_rand_gen_exponential(float $av): float|false {}
function stats_rand_gen_f(float $dfn, float $dfd): float|false {}
function stats_rand_gen_gamma(float $a, float $r): float|false {}
function stats_rand_gen_noncentral_chisquare(float $df, float $xnonc): float|false {}
function stats_rand_gen_noncentral_f(float $dfn, float $dfd, float $xnonc): float|false {}
/**
 * typo compatibility alias
 * @alias stats_rand_gen_noncentral_f
 */
function stats_rand_gen_noncenral_f(float $dfn, float $dfd, float $xnonc): float|false {}
function stats_rand_gen_normal(float $av, float $sd): float|false {}
function stats_rand_phrase_to_seeds(string $phrase): array|false {}
function stats_rand_ibinomial(int $n, float $pp): int|false {}
function stats_rand_ibinomial_negative(int $n, float $p): int|false {}
function stats_rand_gen_ipoisson(float $mu): int|false {}
function stats_rand_gen_noncentral_t(float $df, float $xnonc): float|false {}
function stats_rand_gen_t(float $df): array|false {}
function stats_dens_normal(float $x, float $ave, float $stdev): float|false {}
function stats_dens_cauchy(float $x, float $ave, float $stdev): float|false {}
function stats_dens_laplace(float $x, float $ave, float $stdev): float|false {}
function stats_dens_logistic(float $x, float $ave, float $stdev): float|false {}
function stats_dens_beta(float $x, float $a, float $b): float|false {}
function stats_dens_weibull(float $x, float $a, float $b): float|false {}
function stats_dens_uniform(float $x, float $a, float $b): float|false {}
function stats_dens_chisquare(float $x, float $dfr): float|false {}
function stats_dens_t(float $x, float $dfr): float|false {}
function stats_dens_gamma(float $x, float $shape, float $scale): float|false {}
function stats_dens_exponential(float $x, float $scale): float|false {}
function stats_dens_f(float $x, float $dfr1, float $dfr2): float|false {}
function stats_dens_pmf_binomial(float $x, float $n, float $pi): float|false {}
function stats_dens_pmf_poisson(float $x, float $lb): float|false {}
function stats_dens_pmf_negative_binomial(float $x, float $n, float $pi): float|false {}
function stats_dens_pmf_hypergeometric(float $n1, float $n2, float $N1, float $N2): float|false {}
function stats_stat_powersum(array $arr, float $power): float|false {}
function stats_stat_innerproduct(array $arr1, array $arr2): float|false {}
function stats_stat_independent_t(array $arr1, array $arr2): float|false {}
function stats_stat_paired_t(array $arr1, array $arr2): float|false {}
function stats_stat_percentile(array $arr, float $perc): float|false {}
function stats_stat_correlation(array $arr1, array $arr2): float|false {}
function stats_stat_binomial_coef(int $x, int $n): float|false {}
function stats_stat_factorial(int $n): float|false {}
function stats_variance(array $a, bool $sample = false): float|false {}
function stats_standard_deviation(array $a, bool $sample = false): float|false {}
function stats_absolute_deviation(array $a): float|false {}
function stats_harmonic_mean(array $a): float|false {}
function stats_skew(array $a): float|false {}
function stats_kurtosis(array $a): float|false {}
function stats_covariance(array $a, array $b): float|false {}
